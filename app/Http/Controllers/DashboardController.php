<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // public function __construct() {
    //     $this->middleware(['auth','isAdmin']);//isAdmin middleware lets only users with a //specific permission permission to access these resources
    // }

     public function index()
    {
        if (!Auth::user()->hasPermissionTo('view dashboard')) //If user does //not have this permission
        {
            return view('dashboard.index');
            }
        
    }

    public function SellerForm()
    {
             return view('dashboard.Property.property');
    }
    public function View()
    {
             return view('dashboard.Property.propertyviewlist');
    }
    public function Edit()
    {
        return view('dashboard.Property.propertyEdit');
    }
    public function propertycategory()
    {
        return view ('dashboard.Property.propertycategoryform');
    }
  
   
    public function book()
    {
        return view ('dashboard.Property.propertydetails');
    }
    public function PropertyDisplay()
    {
        return view ('dashboard.Property.PropertyView');
    }
    public function Registerform()
    {
        return view ('dashboard.Property.Registerform');
    }
  

}
