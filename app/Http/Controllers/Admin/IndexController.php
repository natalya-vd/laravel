<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
        return view('admin.pages.index');
    }

    public function test1()
    {
        return view('admin.pages.test1');
    }

    public function test2()
    {
        return view('admin.pages.test2');
    }

    public function addNewsTemplate()
    {
        return view('admin.pages.add-news');
    }
}
