<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\property;
use App\Models\auction;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;

class frontEndController extends Controller
{

    
   
       public function agent(){
        return view('front-end.partials.Agent');
    }
 
    // public function NewRegister(){
    //     return view('auth.Registernew');
    // }

    // public function register(){
        
    //     return view('front-end.partials.register');
    // }
     public function view(){
        return view ('front-end.partials.details');
    //     // $data =Property::find($id);
    //     // return view('front-end.partials.detail')->with('data',$data);
     }
    public function about(){
        return view('front-end.partials.about');
    }
    public function contact(){
        return view('front-end.partials.contact');
    }
    public function blog(){
        return view('front-end.partials.blog');
    }
    public function blogdet(){
        return view('front-end.partials.blogdetail');
    }
    public function auction(){
        $data= auction::all();
        return view('front-end.partials.Auction')->with('data',$data);
    }
      
    
}
