<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    public function index(){
        return view('index');
    }

    public function postIndex(Request $request){
        // dd($request->all());

        $request->validate([
            'firstName'=>'required',
            'lastName'=>'required',
            'username'=>'required',
            'address1'=>'required',
            'country'=>'required',
            'state'=>'required',
            'zip'=>'required',
            'holder_name'=>'required',
            'card_number'=>'required',
            'expiry_date'=>'required',
            'cvv'=>'required',
        ]);
        
        $member = new Member();

        session(['firstName'=>$request->firstName]);
        session(['lastName'=>$request->lastName]);
        session(['username'=>$request->username]);
        session(['email'=>$request->email]);
        session(['address1'=>$request->address1]);
        session(['address2'=>$request->address2]);
        session(['country'=>$request->country]);
        session(['state'=>$request->state]);
        session(['zip'=>$request->zip]);
        if($request->same_billing_Address == 'on'){
            session(['same_billing_Address'=>$request->same_billing_Address]);
        }else{
            $billingAddress = '';
            session(['same_billing_Address'=>$billingAddress]);
        }
        if($request->next_time_info == 'on'){
            session(['next_time_info'=>$request->next_time_info]);
        }else{
            $nextTimeInfo = '';
            session(['next_time_info'=>$nextTimeInfo]);
        }
        session(['select'=>$request->select]);
        session(['holder_name'=>$request->holder_name]);
        session(['card_number'=>$request->card_number]);
        session(['expiry_date'=>$request->expiry_date]);
        session(['cvv'=>$request->cvv]);

        $member->first_name = $request->firstName;
        $member->last_name =  $request->lastName;
        $member->user_name =$request->username;
        $member->email =  $request->email;
        $member->address =  $request->address1;
        $member->address2 =  $request->address2;
        $member->country = $request->country;
        $member->state =  $request->state;
        $member->zip_code = $request->zip;
        if($request->same_billing_Address == 'on'){
            $member->same_billing_Address = $request->same_billing_Address;
        }else{
            $billingAddress = '';
            $member->same_billing_Address = $billingAddress;
        }
        if($request->next_time_info == 'on'){
            $member->next_time_info =  $request->next_time_info;
        }else{
            $nextTimeInfo = '';
            $member->next_time_info = $nextTimeInfo;
        }

        $member->payment_method =  $request->select;
        $member->name_on_card =  $request->holder_name;
        $member->card_number =  $request->card_number;
        $member->expiry_date =  $request->expiry_date;
        $member->cvv = $request->cvv;

        // echo "<pre>";
        // print_r($member);
        // die;

        $member->save();
        session(['member_id'=>$member->id]);
        
        $response = "Data Add Successfully";

        return response()->json($response);
        
    }

    public function getSessionData(){
        $session = session()->all();
        echo "<pre>";
        print_r($session);
    }
    public function distroySessionData(){
        // session()->forget('firstName');
        session()->flush();

        return redirect('/');
    }
}
