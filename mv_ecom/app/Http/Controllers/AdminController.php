<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //Admin view
    public function AdminProfile()
    {
        return view('admin.admin_dashboard');
    }
}
