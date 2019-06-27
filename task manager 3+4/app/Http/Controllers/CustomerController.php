<?php

namespace App\Http\Controllers;

use App\Customer;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use vendor\project\StatusTest;

class CustomerController extends Controller
{
    public function getAll()
    {
        $customers = DB::table('customers')->get();
        return view('index', compact('customers'));
    }

    public function getAdd()
    {
        return view('add');
    }
    public function addCustomer(Request $request){
        $customer=new Customer();
        $customer->name=$request->name;
        $customer->email=$request->email;
        $customer->address=$request->address;
        $customer->save();
        return redirect()->route('getAll');
    }

    public function deleteCustomer($id)
    {
        Customer::destroy($id);
        return redirect()->route('getAll');
    }

    public function showFormEdit($id){
        $customer=Customer::findOrfail($id);
        return view('edit',compact('customer'));
    }

    public function editCustomer(Request $request,$id)
    {
        $customer=Customer::findOrfail($id);
        $customer->id = $request->id;
        $customer->name=$request->name;
        $customer->email=$request->email;
        $customer->address=$request->address;
        $customer->save();
        return redirect()->route('getAll');
    }
}
