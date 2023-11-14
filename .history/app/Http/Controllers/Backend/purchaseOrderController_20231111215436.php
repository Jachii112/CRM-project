<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Material;
use App\Models\PurchaseOrderMaterial;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;

class purchaseOrderController extends Controller
{
    public function OrdersList()
    {
        $orders = PurchaseOrderMaterial::latest()->get();

        return view('backend.purchaseOrder.index_purchaseOrder', compact('orders'));
    }

    public function PurchaseOrderMaterials()
    {

        $latestOrder = PurchaseOrderMaterial::latest()->first();
        $orderMaterials = $latestOrder ? $latestOrder->order_no : 'OR-1';
        return view('backend.purchaseOrder.add_purchaseOrderMaterials', compact('orderMaterials'));
    }

    public function PurchaseOrderEquipment()
    {
        return view('backend.purchaseOrder.add_purchaseOrderEquipment');
    }

    public function StorePurchaseOrderMaterials(Request $request)
{
    // Create an array for each field
    $itemNos = is_array($request->item_no) ? $request->item_no : [$request->item_no];
    $itemDescriptions = is_array($request->item_description) ? $request->item_description : [$request->item_description];
    $unitTypes = is_array($request->unit_type) ? $request->unit_type : [$request->unit_type];
    $remarks = is_array($request->remarks) ? $request->remarks : [$request->remarks];
    $quantities = is_array($request->quantity) ? $request->quantity : [$request->quantity];
    $amounts = is_array($request->amount) ? $request->amount : [$request->amount];

    $totalQuantity = array_sum($quantities);
    $totalAmount = array_sum($amounts);

    $store = PurchaseOrderMaterial::create([
        'order_no' => $request->order_no,
        'name' => $request->name,
        'email' => $request->email,
        'phone' => $request->phone,
        'address' => $request->address,
        'location_of_delivery' => $request->location_of_delivery,
        'delivery_to' => $request->delivery_to,
        'expected_delivery_date' => $request->expected_delivery_date,
        'item_no' => implode(',', $itemNos),
        'item_description' => implode(',', $itemDescriptions),
        'unit_type' => implode(',', $unitTypes),
        'quantity' => implode(',', $quantities),
        'amount' => implode(',', $amounts),
        'remarks' => implode(',', $remarks),
        'total_quantity' => $totalQuantity,
        'total_amount' => $totalAmount
    ]);

    return redirect()->route('view.purchaseOrderMaterials', ['order_no' => $store->order_no]);
}


    public function viewPurchaseOrderMaterials($orderNo)
    {
        $information = PurchaseOrderMaterial::where('order_no', $orderNo)->get();
        return view('backend.purchaseOrder.view_purchaseOrderMaterials', compact('information'));
    }


    public function StorePurchaseOrderEquipment(Request $request)
    {

    }

    public function DeleteOrdersMaterial($id)
    {
        PurchaseOrderMaterial::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Order Deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
