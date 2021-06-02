<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuyerController extends Controller
{
    public function index()
    // {
        // if (!Auth::user()->hasPermissionTo('view dashboard')) //If user does //not have this permission
        {
            return view('BuyerDashboard.index');
            }
        
    // }
}
