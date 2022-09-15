<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cat;
use Illuminate\Http\Request;

class CatController extends Controller
{
    public function index()
    {
        $cats = Cat::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.cat', ['cats' => $cats]);
    }
}
