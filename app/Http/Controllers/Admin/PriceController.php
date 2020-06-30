<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class PriceController extends Controller
{
       public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function price()
    {
    	 $price=DB::table('prices')->first();
    	 return view('admin.price.price_setting',compact('price'));
    }
     public function UpdatePrice(Request $request)
    {
    	 $id=$request->id;
    	 $data=array();
    	 $data['basic_month']=$request->basic_month;
    	 $data['premium_month']=$request->premium_month;
    	 $data['corporate_month']=$request->corporate_month;
    	 $data['basic_year']=$request->basic_year;
    	 $data['premium_year']=$request->premium_year;
    	 $data['corporate_year']=$request->corporate_year;
    	  $data['community_month']=$request->community_month;
    	   $data['community_year']=$request->community_year;

    	 DB::table('prices')->where('id',$id)->update($data);
    	 $notification=array(
                 'messege'=>'price Update',
                 'alert-type'=>'success'
                       );
        return Redirect()->back()->with($notification);
    }

}
