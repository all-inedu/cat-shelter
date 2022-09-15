<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\Validator;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Replies;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\File;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $search_query = $request->get('search_query');
        
        $blogs = Blog::when($search_query, function ($query) use ($search_query) {
                        $query->where('title', 'like', '%'.$search_query.'%')
                                ->orWhereHas('category', function ($query_category) use ($search_query) {
                                    $query_category->where('name', 'like', '%'.$search_query.'%');
                                })
                                ->orWhere('content', 'like', '%'.$search_query.'%');
                    })->orderBy('updated_at', 'desc')->paginate(10);
        return view('admin.blog', ['blogs' => $blogs]);
    }

    public function delete(Request $request)
    {
        try {

            $blog = Blog::find($request->route('id'));
            $blog->delete();
        } catch (Exception $e) {
            return Redirect::back()->with('notif', ['status' => 'error', 'title' => $e->getMessage()]);
        }

        return redirect('admin/blog')->with('notif', ['status' => 'success', 'title' => 'The blog has successfully deleted']);
        
    }

    public function edit(Request $request)
    {
        $blog = Blog::find($request->route('id'));
        $categories = Category::orderBy('name', 'asc')->get();
        return view('admin.blog-edit', ['blog' => $blog, 'categories' => $categories]);
    }

    public function update(Request $request)
    {

        $rules = [
            'id' => 'required|exists:blogs,id',
            'title' => 'required|max:255',
            'category' => 'required|array',
            'category.*' => 'required|exists:categories,id|distinct',
            'thumbnail' => 'nullable|mimes:jpg,jpeg,bmp,png,webp|max:2048',
            'content' => 'required'
        ];

        $validator = Validator::make($request->all() + ['id' => $request->route('id')], $rules);
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator->messages());
        }

        $blog = Blog::find($request->route('id'));
        $thumbnail = $blog->thumbnail;

        if ($request->hasFile('thumbnail')) {

            $isExist = File::exists(public_path('blogs/'.$thumbnail));
            if ($isExist) {
                File::delete(public_path('blogs/'.$thumbnail));
            }            

            $time = date("His");
            $file_name = str_replace(' ', '-', strtolower($request->title));
            $file_format = $request->file('thumbnail')->getClientOriginalExtension();
            $med_file_path = $request->file('thumbnail')->storeAs('', $time.'-'.$file_name.'.'.$file_format, ['disk' => 'public-blog']);
            $thumbnail = $time.'-'.$file_name.'.'.$file_format;
        }

        DB::beginTransaction();
        try {

            $blog->title = $request->title;
            $blog->content = $request->content;
            $blog->thumbnail = $thumbnail;
            $blog->save();
            
            for($i = 0 ; $i < count($request->category) ; $i++) {
                $sync_data[] = [
                    'category_id' => $request->category[$i],
                    'blog_id' => $request->route('id'),
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ];
            }
            
            $blog->category()->sync($sync_data);

            DB::commit();
            
        } catch (Exception $e) {
            DB::rollBack();
            return Redirect::back()->with('notif', ['status' => 'error', 'title' => $e->getMessage()]);
        }

        return redirect('admin/blog/'.$request->route('id').'/edit')->with('notif', ['status' => 'success', 'title' => 'Blog has been updated']);
    }

    public function detail(Request $request)
    {
        $blog = Blog::find($request->route('id'));
        $comments = $blog->comments()->paginate(10);
        return view('admin.blog-view', ['blog' => $blog, 'comments' => $comments, 'id' => $request->route('id')]);   
    }

    public function view_comment(Request $request)
    {
        $id = $request->post('id');
        $comment = Comment::with('replies')->find($id);
        return response()->json($comment);
    }

    public function reply(Request $request)
    {
        $rules = [
            'add-id' => ['required', 'exists:comments,id'],
            'r-desc' => ['required'],
        ];

        $messages = [
            'r-desc.required' => 'You need to fill the reply box'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator->messages());
        }

        DB::beginTransaction();
        try {

            $replied_comment_id = $request->post('add-id');
            $comment = Comment::find($replied_comment_id);

            if ($reply = Replies::where('comment_id', $replied_comment_id)->first())
            {
                $reply->description = $request->post('r-desc');
                $reply->save();
                $message = 'Your reply has been updated';
            } else {

                $reply = new Replies;
                $reply->comment_id = $replied_comment_id;
                $reply->description = $request->post('r-desc');
                $reply->from = Auth::guard('admin')->user()->name;
                $reply->save();
                $message = 'Your reply has been submitted';
            }
            
            DB::commit();

        } catch (Exception $e) {
            DB::rollBack();
            return Redirect::back()->withErrors($e->getMessage());
        }

        return redirect('admin/blog/'.$comment->blog_id)->with('reply-success', $message);
    }

    public function new()
    {
        $categories = Category::orderBy('name', 'asc')->get();
        return view('admin.blog-new', ['categories' => $categories]);
    }

    public function store(Request $request)
    {
        $rules = [
            'title' => 'required|max:255',
            'category' => 'required|array',
            'category.*' => 'required|exists:categories,id|distinct',
            'thumbnail' => 'nullable|mimes:jpg,jpeg,bmp,png,webp|max:2048',
            'content' => 'required'
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator->messages());
        }

        if ($request->hasFile('thumbnail')) {
            $time = date("His");
            $file_name = str_replace(' ', '-', strtolower($request->title));
            $file_format = $request->file('thumbnail')->getClientOriginalExtension();
            $med_file_path = $request->file('thumbnail')->storeAs('', $time.'-'.$file_name.'.'.$file_format, ['disk' => 'public-blog']);
            $thumbnail = $time.'-'.$file_name.'.'.$file_format;
        }

        DB::beginTransaction();
        try {

            $user = Auth::guard('admin')->user();
            $add = $user->blogs()->create([
                'title' => $request->title,
                'content' => $request->content,
                'thumbnail' => $thumbnail,
            ]);
            
            for ($i = 0; $i < count($request->category); $i++) {
                $add->category()->attach($request->category[$i], [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ]);
            }
            DB::commit();
            
        } catch (Exception $e) {
            DB::rollBack();
            return Redirect::back()->with('notif', ['status' => 'error', 'title' => $e->getMessage()]);
        }

        return redirect('admin/blog')->with('notif', ['status' => 'success', 'title' => 'New blog has been submitted']);

    }
}
