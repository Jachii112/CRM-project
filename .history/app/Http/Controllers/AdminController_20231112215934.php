<?php

namespace App\Http\Controllers;


use App\Models\Customer;
use App\Models\WebsiteServiceAppointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Models\Events;
use Illuminate\Support\Facades\Event;

class AdminController extends Controller
{
    public function AdminDashboard()
    {
        return view('admin.index');
    }

    public function AdminLogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin/login');
    }

    public function AdminLogin()
    {
        return view('admin.admin_login');
    }

    public function AdminCalendar()
    {
        return view('admin.admin_calendar');
    }

    public function AdminEvent(Request $request)
    {
        $start = date('Y-m-d', strtotime($request->start));
        $end = date('Y-m-d', strtotime($request->end));

        $events = Events::where('start_date', '>=', $start)
        ->where('end_date', '<=', $end)->get()
        ->map( fn ($item) => [
            'id' => $item->id,
            'title' => $item->title,
            'start' => $item->start_date,
            'end' => $item->end_date,
            'category' => $item->category
        ]);
        return response()->json($events);
    }

    public function createEvent(Event $event)
    {
        return view('admin.event-form', ['data' => $event, 'action' => route('events.store')]);
    }

    public function AdminProfile()
    {
        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('admin.admin_profile_view',compact('profileData'));
    }

    public function AdminProfileStore(Request $request)
    {
        $id = Auth::user()->id;
        $data = User::find($id);
        $data->username = $request->username;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address;

        if($request->file('photo'))
        {
            $file = $request->file('photo');
            @unlink(public_path('upload/admin_images/'.$data->photo));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/admin_images'),$filename);
            $data['photo'] = $filename;
        }
        $data->save();
        $notification = array(
            'message' => 'Admin Profile Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function AdminChangePassword()
    {
        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('admin.admin_change_password',compact('profileData'));
    }

    public function AdminUpdatePassword(Request $request)
    {
        //Validation
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed'
        ]);

        //Match The Old Password
        if(!Hash::check($request->old_password, auth::user()->password))
        {
            $notification = array(
                'message' => 'Old Password Does not Match!',
                'alert-type' => 'error'
            );
            return back()->with($notification);
        }

        //Update The New Password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);
        $notification = array(
            'message' => 'Password Change Successfully',
            'alert-type' => 'success'
        );
        return back()->with($notification);
    }

    public function AdminInbox()
    {
        $customerAppointment = WebsiteServiceAppointment::all();
        return view('backend.email.inbox', compact('customerAppointment'));
    }

    public function AdminRead($id)
    {
        $customerAppointed = WebsiteServiceAppointment::findOrFail($id);
        return view('backend.email.read', compact('customerAppointed'));
    }

    public function addCustomerFromInbox(Request $request)
    {
        // Get the customerName, phoneNumber, and customerEmail data from the request
        $customerName = $request->query('customerName');
        $phoneNumber = $request->query('phoneNumber');
        $customerEmail = $request->query('customerEmail');

        // Pass the data to the view
        return view('backend.email.add_customer_from_inbox', compact('customerName', 'phoneNumber', 'customerEmail'));
    }

}
