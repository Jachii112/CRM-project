<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Equipment;
use App\Models\Material;
use App\Models\PurchaseOrderMaterial;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function RegisterItem()
    {
        return view('backend.inventory.register_item');
    }

    public function StoreItem(Request $request)
    {
        $request->validate([
            'item_no' => 'required',
            'item_description' => 'required',
            'unit' => 'required',
            'amount' => 'required',
            'remarks' => 'required',
            'location' => 'required',

        ]);

        $notification = array(
            'message' => 'Item added Successfully',
            'alert-type' => 'success'
        );

        Material::create($request->all());
        return redirect()->route('materials.inventory')->with($notification);
    }

    public function MaterialsListTable()
    {
        $materials = Material::latest()->get();
        return view('backend.inventory.materials_list_table', compact('materials'));
    }

    public function ViewMaterialsDetail($itemNo)
    {
        $materialsInfo = Material::where('item_no', $itemNo)->get();
        $purchaseOrder = PurchaseOrderMaterial::where('item_no' , $itemNo)->get();
        return view('backend.inventory.view_material_detail', compact('materialsInfo', 'purchaseOrder'));
    }

    public function RegisterEquipment()
    {
        return view('backend.inventory.register_equipment');
    }

    public function StoreEquipment(Request $request)
    {

        $request->validate([
            'custom_id'=> 'required',
            'item_description'=> 'required',
            'unit'=> 'required',
            'supplier' => 'required',
            'location'=> 'required',
            'remarks' => 'required',
            'amount' => 'required',
        ]);

        $notification = array(
            'message' => 'Item added Successfully',
            'alert-type' => 'success'
        );

        Equipment::create($request->all());
        return redirect()->route('equipment.inventory')->with($notification);

    }

    public function EquipmentListTable()
    {
        $equipment = Equipment::latest()->get();
        return view('backend.inventory.equipment_list_table', compact('equipment'));
    }

}
