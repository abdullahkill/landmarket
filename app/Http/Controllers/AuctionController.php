<?php

namespace App\Http\Controllers;
 use App\Models\property;
use App\Models\auction;
use Illuminate\Support\Facades\DB;
use App\Images;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;
use Image;
use Illuminate\Http\Request;

class AuctionController extends Controller
{
    function addData(Request $req)
    
        {

       
       $auction= new auction;
       
       $auction->PropertyTittle=$req->PropertyTittle;
       $auction->Propertyaddress=$req->Propertyaddress;
       $auction->Propertytype=$req->Propertytype;
       $auction->propertyprice=$req->Propertyprice;
       $auction->City=$req->City;
       $auction->Area=$req->Area;
       $auction->Description=$req->Description;
       $auction->contact=$req->contact;
       $auction->Timer=$req->Timer;
       $auction->bidamount=$req->bidamount;
       if ($files = $req->file('Image')) {
        $req->session()->flash('message','data uploaded successfull');
        $destinationPath = 'C:\wamp64\www\landmarket\public\image'; // upload path
        $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
        $files->move($destinationPath, $profileImage);
        $auction['Image'] = "$profileImage";
       $auction->save();
       return redirect('Auctionlist')->with('Message',' Added Data Succesfull:), You Request have Been Generate Successfully!'); 
    //    }
       
    }
}

// public function show2() 
// {
//     // if (!Auth::user()->hasPermissionTo('view property'))
    

//         $data= auction::all();
//     return view('front-end.partials.Auction')->with('data',$data);  
// }

public function auction(){
    $data= auction::all();
    return view('front-end.partials.Auction')->with('data',$data);
}


 public function show() 
    {
        

            $data= auction::all();
        return view('dashboard.property.Auctionlist')->with('data',$data);  
    }
   


    
  
    public function auctionform(){
        return view('dashboard.Property.AuctionForm');
    }
    public function editData($id)
    {

        $editdata = property::find($id);
        return view('dashboard.Property.AuctionForm')->with('editdata',$editdata);

    }
    public function auctionlist(){
        return view('dashboard.Property.Auctionlist');
    }
    public function image()
    {
        $data= Property::all();

        return view('front-end.partials.detail')->with('data',$data);    
    }
    
}
