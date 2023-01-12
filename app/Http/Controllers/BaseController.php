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

        //Customer Edit page
    public function Edit($customer_id){
        $customer = Customer::where('id', $customer_id)->first();
        $data['customer'] = $customer;
        return view('customer_edit', $data);
    }

    //Customer update
    public function Update(Request $request,$customer_id){
        $name = $request->input('customer_name');
        $email = $request->input('customer_email');
        $phone = $request->input('customer_phone');

        $attr = [
            'name'=>$name,
            'email'=>$email,
            'phone'=>$phone
        ];

        
        if(Customer::where('id', $customer_id)->update($attr)){
            $request->session()->flash('msg_success', 'Customer update successfully.');
        }else{
            $request->session()->flash('msg_error', 'Customer update faield');
        }
        
        return redirect('/');

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

        if(Customer::insert($attr)){
            $request->session()->flash('msg_success', 'Customer created successfully.');
        }else{
            $request->session()->flash('msg_error', 'Customer created faield');
        }

        return redirect('/');

    }
    
    //Delete method
    public function Delete(Request $request, $customer_id){

        if(Customer::where('id', $customer_id)->delete()){
            $request->session()->flash('msg_success', 'Customer deleted successfully.');
        }else{
            $request->session()->flash('msg_error', 'Customer deletion faield');
        }
        return redirect('/');
    }
}
