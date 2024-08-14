<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VendorController extends Controller
{
    //Vendor View
    public function VendorProfile()
    {
        return view('vendor.vendor_dashboard');
    }
}
