<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Adopter;
use App\Models\Blog;
use App\Models\Cat;
use App\Models\Order;
use App\Models\Shelter;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data = array(
            'total_of_cat' => array(
                'unadopted' => Cat::where('status', 1)->where('adopt_status', 'unadopted')->count(),
                'adopted' => Cat::where('status', 1)->where('adopt_status', 'adopted')->count()
            ),
            'total_blog' => Blog::count(),
            'total_shelter' => Shelter::count(),
            'total_adopter' => Adopter::count(),
            'recent_adoption' => Order::where('status', 1)->orderBy('updated_at', 'desc')->take(5)->get(),
            'recent_blog' => Blog::where('status', 1)->orderBy('updated_at', 'desc')->take(5)->get(),
        );

        return view('admin.index', $data);
    }
}
