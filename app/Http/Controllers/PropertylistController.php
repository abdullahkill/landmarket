<?php

namespace App\Http\Controllers;
use App\Models\property;
use App\Models\propertyImage;
use Illuminate\Support\Facades\DB;
use App\Images;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;
use Image;
use Illuminate\Http\Request;

class PropertylistController extends Controller
{
    // public function __construct() {
    //     $this->middleware(['auth','isAdmin']);//isAdmin middleware lets only users with a //specific permission permission to access these resources
    // }
      function addData(Request $req)
    // {
        // if (!Auth::user()->hasPermissionTo('add property'))
        {
           $hi = count($req->file('fileUpload')); 
       if( $hi < 4 ){
       
        return back()->with("error","Please select all image");
       }

       
       $property= new Property;
       
       $property->PropertyTittle=$req->PropertyTittle;
       $property->Propertyaddress=$req->Propertyaddress;
       $property->Propertytype=$req->Propertytype;
       
       $property->propertyprice=$req->Propertyprice;
       $property->City=$req->City;
       $property->Area=$req->Area;
       $property->Description=$req->Description;
       $property->contact=$req->contact;
       $property->save();





       
       foreach ($req->fileUpload as $v => $k) {

        
       $data= new propertyImage;
       
       $data->property_id = $property->id;

       $image=$req->file('fileUpload')[$v];
       $exte=$image->extension();
       $file=time().'.'.$exte;
       $image->storeAs('public/property_image',$file);
   
         
   
       $data->image = $file;

       $data->save();



       
       }


   
      return redirect('propertylist')->with('Message',' Added Data Succesfull:), You Request have Been Generate Successfully!'); 
    //    }
       
    }

    function show() 
    // {
        // if (!Auth::user()->hasPermissionTo('view property'))
        {

            $data= Property::all();
        return view('dashboard.property.propertyviewlist')->with('data',$data);
        }
        




        function property_image(request $request) 

            {
    
                $data= propertyImage::find($request->id);
                
       $image=$request->file('image');
       $exte=$image->extension();
       $file=time().'.'.$exte;
       $image->storeAs('public/property_image',$file);
   
         
   
       $data->image = $file;
       $data->save();

            return back()->with('success','image update');
            }


    function property_id($id) 
    // {
        // if (!Auth::user()->hasPermissionTo('view property'))
        {

            $data= propertyImage::where('property_id',$id)->get();

         return view('dashboard.property.propertyviewlist')->with('data',$data);
        }

    function Sellerpropertyview() 
        {

            $data = Property::where('user_id', Auth::user()->id)->get();
            // Property::all();
        return view('dashboard.Property.Sellerproperty')->with('data',$data);
        }

    
    
    ///////////////buyer///////
     // $data= Property::where('status',"Approved")->get();

  
    
    public function delete($id){
        $data = Property::find($id);
        $data->delete();
        return redirect('propertylist')->with('Message',' Delete Data Succesfull:), You Request have Been Generate Successfully!');
    }

    public function editData($id)
    {

        $editdata = property::find($id);
        return view('dashboard.property.propertyEdit')->with('editdata',$editdata)->with('Message',' update Data Succesfull:), You Request have Been Generate Successfully!');

    }

    // public function status($id)
    // {
          
    //     $editdata = property::find($id);
    //      $update->Status="Approved";
    //     return redirect()->back()->with('editdata',$editdata)->with('Message',' update Data Succesfull:), You Request have Been Generate Successfully!');
           
    // }
    public function status($id){

        $user = DB::table('properties')
        ->where('id', $id)
        ->update([
            'Status' => 'Approved',
            // 'email' => $request->email,
            // 'Role' => $request->role,
            
        ]);
         return redirect('propertylist');
    }
    public function cancellation($id){

        $user = DB::table('properties')
        ->where('id', $id)
        ->update([
            'Status' => 'Cancel',
        ]);
         return redirect('propertylist');
    }
 

     public function update(Request $request)
    {
        
        
        $update = Property::find($request->id);
        $update->PropertyTittle=$request->input('PropertyTittle');
        $update->Propertyaddress = $request->input('Propertyaddress');
        $update->Propertytype = $request->input('Propertytype');
        $update->Propertyprice = $request->input('Propertyprice');
        $update->City = $request->input('City');
        $update->Area = $request->input('Area');
        $update->Description= $request->input('Description');
        $update->contact=$request->input('contact');

        if ($files = $request->file('Image')) {
            $destinationPath = 'C:\wamp64\www\landmarket\landmarket\public\image'; // upload path
            $Image = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $Image);
            $update['Image'] = "$Image";
    
            $update->save();
        
        return redirect('/propertylist')->with('Message',' update Data Succesfull:), You Request have Been Generate Successfully!');
    }
    }


/////////////////////////////////////front-End////////////
    public function index()
    {
        // return view('front-end.partials.search');
        //  $search = Property::all(); 
        // $search_text =$_GET['query'];
        
        $search='';
        //  $search =Property::where ('Propertyname','like','%'.$search_text.'%')->get();
        return view('front-end.partials.search')->with('search', $search);
    }

    public function Search(){
        $search_text =$_GET['query'];
        $search =Property::where ('Propertyaddress','like','%'.$search_text.'%')->get();
        return view('front-end.partials.search')->with('search',$search);
        }
    
        public function Detail($id)
      {
        $data =propertyImage::where('property_id',$id)->get();
        $hi= propertyImage::all();
        $property= property::orderBy('id', 'DESC')->get();
        return view('front-end.partials.detail',['data'=>$data,'show'=>$hi,'properties'=>$property]);
       }
    public function image()
    {
        $data= Property::all();
        // $result = DB::Table('properties')->select('Image')->get(); Hamza...db
        return view('front-end.partials.detail')->with('data',$data);//with('result', $result);    
    }
}
