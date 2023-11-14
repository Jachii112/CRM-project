<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Customer;
use App\Models\WebsiteServiceAppointment;

class CustomerController extends Controller
{
    public function IndexCustomer()
    {
        $customer = Customer::latest()->get();
        return view('backend.customers.index_customer',compact('customer'));
    }

    public function AddCustomer()
    {
        $latestCustomer = Customer::latest('id')->first();
        $customerID = $latestCustomer ? $latestCustomer->customer : 'C1';
        $getAppointmentData = WebsiteServiceAppointment::all();
        return view('backend.customers.add_customer', compact('getAppointmentData', 'customerID'));
    }

    public function StoreCustomer(Request $request)
    {
        $request->validate([
            'customer_name' => 'required',
            'customer_no' => 'required',
            'contact_no' => 'required',
            'email' => 'required',
            'address' => 'required',
            'residential' => 'required'
        ]);

        $notification = array(
            'message' => 'Customer Registered Successfully',
            'alert-type' => 'success'
        );
        Customer::create($request->all());
        return redirect()->route('index.customer')->with($notification);
    }

    public function ViewCustomer($id)
    {
        $types = Customer::findOrFail($id);
        return view('backend.customers.view_customer',compact('types'));
    }

    public function UpdateCustomer(Request $request)
    {
        $pid = $request->id;

        Customer::findOrFail($pid)->update([
            'customer_name' => $request->customer_name,
            'contact_no' => $request->contact_no,
            'email' => $request->email,
            'address' => $request->address,
        ]);

        $notification = array(
            'message' => 'Customer Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('index.customer')->with($notification);
    }

    public function DeleteCustomer($id)
    {
        Customer::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Customer Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
