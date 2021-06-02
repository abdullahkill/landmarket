<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\rentproperty;
use App\Models\rent_image;
use Illuminate\Support\Facades\DB;
use App\Images;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;
use Image;

class rentcontroller extends Controller
{
     
    public function RentForm()
    {
             return view('dashboard.RentProperty.rentform');
    }
    public function Edit()
    {
        return view('dashboard.RentProperty.rentedit');
    }

    function rentaddData(Request $request)
    {
       $rent= new rentproperty;
       $rent->Name=$request->Name;
       $rent->Phone=$request->Phone;
       $rent->Email=$request->Email;
       $rent->EmgContact=$request->EmgContact;
       $rent->Area=$request->Area;
       $rent->Description=$request->Description;
       $rent->Price=$request->price;

       $rent->save();


       foreach ($request->fileUpload as $v => $k) {

        
       
        $image=$request->file('fileUpload')[$v];
        $exte=$image->extension();
        $file=time().'.'.$exte;
        $image->storeAs('public/rent_image',$file);
         


        $new = new rent_image();
        $new->rentproperty_id =$rent->id;
        $new->image = $file;
        $new->save();

       
       }


       return redirect('Rentlist')->with('Message',' Added Data Succesfull:), You Request have Been Generate Successfully!'); ;
       
    }

function Show() 
{
    $data = rentproperty::paginate(15);
    // $data= rentproperty::all();
    return view('dashboard.RentProperty.rentview')->with('data',$data);
}


function view_image($id) 
{
    $data = rent_image::where('rentproperty_id','=',$id)->get();
    // $data= rentproperty::all();

    return view('dashboard.RentProperty.rentimageview',['show'=>$data]);
}


public function Delete($id){
    $data = rentproperty::find($id);
    $data->Delete();
    return redirect('Rentlist');
}
public function EditData($id)
{

    $editdata = rentproperty::find($id);
    return view('dashboard.RentProperty.rentedit')->with('editdata',$editdata);

}
public function image_update(Request $request)
{
    $data = rent_image::find($request->id);

    
    $image=$request->file('image');
    $exte=$image->extension();
    $file=time().'.'.$exte;
    $image->storeAs('public/rent_image',$file);


    $data->image = $file;
    $data->save();
    return redirect("/Rentlist")->with("success","Image save Success");
}

public function Update(Request $request)
{

    $rent = rentproperty::find($request->id);
    $rent->Name = $request->input('Name');
    $rent->Phone = $request->input('Phone');
    $rent->Phone = $request->input('price');
    $rent->Email = $request->input('Email');
    $rent->EmgContact = $request->input('EmgContact');
    $rent->Area = $request->input('Area');
    $rent->Description= $request->input('Description');
    if ($files = $request->file('Image')) {
        $destinationPath = 'C:\wamp64\www\landemarket\public\image'; // upload path
        $image = date('YmdHis') . "." . $files->getClientOriginalExtension();
        $files->move($destinationPath, $image);
        $rent['Image'] = "$image";  
    $rent->save();
    
    return redirect('/Rentlist');
}
}

}
