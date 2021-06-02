<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\customer;

class CustomerController extends Controller
{
    function AddCustomer(Request $req)
    {
    if (!Auth::user()->hasPermissionTo('customer form'))
    {
        
       $customer= new Customer;
       $customer->CustomerName=$req->CustomerName;
       $customer->Email=$req->Email;
       $customer->Gender=$req->Gender;
       $customer->CustomerAge=$req->CustomerAge;
       $customer->CustomerAddress=$req->CustomerAddress;
       $customer->CustomerCity=$req->CustomerCity;
       $customer->CustomerPostCode=$req->CustomerPostCode;
       $customer->CustomerCountry=$req->CustomerCountry;
       $customer->customerstate=$req->CustomerState;
       $customer->customerphone=$req->CustomerPhone;
       $customer->agentfirstname=$req->AgentFirstName;
       $customer->agentlastname=$req->AgentLastName;
       $customer->agentgender=$req->AgentGender;
       $customer->agentaddress=$req->AgentAddress;
       $customer->agentcity=$req->AgentCity;
       $customer->agentcountry=$req->AgentCountry;
       $customer->agentstate=$req->AgentState;
       $customer->agentphone=$req->AgentPhone;
       $customer->save();
       return redirect('customerform');
       
  
}
    }
    function show() 
    {
        $customer= Customer::all();
        return view('dashboard.property.Customerlist')->with('customer',$customer);
    }
    
    public function Cusform()
    {
        return view('dashboard.Property.Customerform');
    }

    public function index()
    {
        return view('dashboard.Property.Customerlist');
    }
   
}
