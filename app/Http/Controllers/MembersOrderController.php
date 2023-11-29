<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MemberOrders;

class MembersOrderController extends Controller
{
    public function addProduct(){

        return view('addproduct');
    }

    public function postAddProduct(Request $request){
        // dd($request->all());

        $request->validate([
            'product_name'=>'required',
            'selling_price'=>'required',
        ]);

       $memberOrders =  new MemberOrders();

       $memberOrders->product_name = $request->product_name;
       $memberOrders->mrp = $request->mrp;
       $memberOrders->selling_price = $request->selling_price;
       $memberOrders->member_id = session()->has('member_id');

    //    print_r($memberOrders);
       $memberOrders->save();

       $response = "First Product Add Successfully";
       return response()->json($response);

    }

    // Add Second product 

    public function addSecondProduct(){
        return view('addsecondproduct');
    }

    public function postAddSecondProduct(Request $request){

        $request->validate([
            'product_name'=>'required',
            'selling_price'=>'required',
        ]);

       $memberOrders =  new MemberOrders();

       $memberOrders->product_name = $request->product_name;
       $memberOrders->mrp = $request->mrp;
       $memberOrders->selling_price = $request->selling_price;
       $memberOrders->member_id = session()->has('member_id');

    //    print_r($memberOrders);
       $memberOrders->save();
       $response = "Second Product Add Sucessfully";
       return response()->json($response);
    }

    public function welcome(){

        if(session()->has('member_id')){
            $member_id = session()->get('member_id');
        }else{
            $member_id = 0;
        }        
        // echo $member_id;die;
        $product = MemberOrders::where('member_id', $member_id)->get();

        if(! is_null($product)){
            $productData = $product;
        }else{
            $productData = '';
        }

        return view('welcome', compact('productData'));
        
    }
}
