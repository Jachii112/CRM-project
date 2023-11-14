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
        // Validate the quantity field
        $validatedData = $request->validate([
            'quantity' => 'numeric|max:999999', // Replace 999999 with the maximum value allowed for the quantity
        ]);

        // Create an array for each field
        $itemNos = is_array($request->item_no) ? implode(',', $request->item_no) : $request->item_no;
        $itemDescriptions = is_array($request->item_description) ? implode(',', $request->item_description) : $request->item_description;
        $unitTypes = is_array($request->unit_type) ? implode(',', $request->unit_type) : $request->unit_type;
        $remarks = is_array($request->remarks) ? implode(',', $request->remarks) : $request->remarks;

        $quantity = is_array($request->quantity) ? array_sum($request->quantity) : $request->quantity;
        $amount = is_array($request->amount) ? array_sum($request->amount) : $request->amount;

        $totalAmount = $quantity * $amount;
        $totalQuantity = $quantity + $quantity;

        $quantity = is_array($request->quantity) ? implode(',', $request->quantity) : $request->quantity;
        $amount = is_array($request->amount) ? implode(',', $request->amount) : $request->amount;

        $store = PurchaseOrderMaterial::create([
            'order_no' => $request->order_no,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'location_of_delivery' => $request->location_of_delivery,
            'delivery_to' => $request->delivery_to,
            'expected_delivery_date' => $request->expected_delivery_date,
            'item_no' => $itemNos,
            'item_description' => $itemDescriptions,
            'unit_type' => $unitTypes,
            'quantity' => $quantity,
            'amount' => $amount,
            'remarks' => $remarks,
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
