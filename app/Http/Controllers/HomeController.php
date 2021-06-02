<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use app\Models\Property;
// use App\Models\property;
use App\Models\property;
use App\Models\propertyImage;
use Illuminate\Support\Facades\Storage;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
   public function index()
    {
        return view('dashboard.index');
    }

     public function register()
    {
        return view('auth.login');
    }
    public function image()
    {
        $data= Property::all();
        $image= propertyImage::all();
        // $result = DB::Table('properties')->select('Image')->get(); 
        return view('front-end.partials.index',['data'=>$data,'image'=>$image]);
    }

}
