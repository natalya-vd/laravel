<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
        return view('pages.admin.index');
    }

    public function test1()
    {
        return view('pages.admin.test1');
    }

    public function test2()
    {
        return view('pages.admin.test2');
    }
}
