<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Customer;
use Illuminate\Support\Facades\Log;

class CustomerController extends Controller
{
    //
    // protected $tableName="customers";

    function showForm(){
        return view ('customers');
    }
    // function index(){
    //     $version=3;
    //     if(($version>1 && $version<3)){
    //         echo "Estimation not called as version is not in range 1 to 3. cueent version is $version";
    //     }
    //     else{
    //         echo "Estimation called";
    //     }
    //     //echo "Customer controller";
    //     // return DB::select("Select * from customers");
    // }
    function getData(){
        // return Customer::all();
        $data=Customer::all();
        Log::info('data',[
            'data' =>$data
        ]);
       return response()->json([
        'data' => $data
       ]);
    }
    function insert_customer(Request $request){
            // console.log($request.txtCustomerName);
            // $newcustomer=new Customer();
            // $newcustomer->name=$request->txtCustomerName;
            // $newcustomer->email=$request->txtCustomerEmail;
            // $newcustomer->city=$request->txtCustomerCity;
            // $newcustomer->mobile=$request->txtCustomerMobile;
            // $newcustomer->save();
            $user=DB::insert('insert into customers (name,email,city,mobile)values(?,?,?,?)',[$request->txtCustomerName,$request->txtCustomerEmail,$request->txtCustomerCity,$request->txtCustomerMobile]);
    }
}
