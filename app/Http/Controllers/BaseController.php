<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class BaseController extends Controller
{
    //Home page
    public function Home(){
        $data['all_customer'] = Customer::orderBy('id','DESC')->get();
        return view('home',$data);
    }

        //Edit page
    public function Edit(){
        return view('edit');
    }

    //function customer create
    public function Add(){
        return view('add_customer');
    }

     //function for create data in database table

    public function Create(Request $request){
        $name = $request->input('customer_name');
        $email = $request->input('customer_email');
        $phone = $request->input('customer_phone');

        $attr = [
            'name'=>$name,
            'email'=>$email,
            'phone'=>$phone
        ];

        Customer::insert($attr);
        return redirect('/');

    } 
}
