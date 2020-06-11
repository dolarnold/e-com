<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    //
    public function dashboard()
    {
//            return view('admin.admin_dashboard');
        return view('admin.test')->with([
            'page_title' => "Admin dashboard",
            'page_description' => "This is the admin dashboard"
        ]);
    }
}

