<?php

namespace App\Http\Controllers\Backend;

use App\Models\Equipment;
use App\Models\Material;
use App\Models\Ticket;
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
        $customerID = $latestCustomer ? $latestCustomer->customer_no : 'C1';
        $getAppointmentData = WebsiteServiceAppointment::all();
        return view('backend.customers.add_customer', compact('getAppointmentData', 'customerID'));
    }

    public function getCustomerData($id)
    {
        $getAppointmentData = WebsiteServiceAppointment::where('customerName', $id)->first();
        return response()->json($getAppointmentData);
    }

    public function StoreCustomer(Request $request)
    {
        $request->validate([
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
        $tickets = Ticket::where('customer_name', $types->customer_name)->get();
        return view('backend.customers.view_customer',compact('types', 'tickets'));
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

    public function addTicketFromCustomer(Request $request)
    {
        $customerNumber = $request->query('customerNumber');
        $customerName = $request->query('customerName');
        $phoneNumber = $request->query('phoneNumber');
        $customerEmail = $request->query('customerEmail');

        $materialInfo = Material::all();
        $equipmentInfo = Equipment::all();

        return view('backend.customers.add_ticket_from_customer',compact('customerNumber','customerName','phoneNumber','customerEmail', 'materialInfo', 'equipmentInfo'));

    }
}
