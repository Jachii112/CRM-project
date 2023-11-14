<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\Customer;
use App\Models\Material;
use App\Models\Equipment;
use App\Models\Quotation;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function IndexTicket()
    {
        $tickets = Ticket::with('customer')->latest()->get();
        return view('backend.tickets.ticket', compact('tickets'));{{  }}
    }

    /**
     * Show the form for creating a new resource.
     */
    public function CreateTicket(Request $request)
    {
        $latestTicket = Ticket::latest('id')->first();
        $ticketNo = $latestTicket ? $latestTicket->ticket_no : 'T1';

        $customerInfo = Customer::all();
        $materialInfo = Material::all();
        $equipmentInfo = Equipment::all();

        $latestTechnician = Ticket::latest()->value('technician');
        $technicians = Technician::where('name', '!=', $latestTechnician)->get();

        return view('backend.tickets.add_ticket', compact('ticketNo', 'customerInfo', 'materialInfo', 'equipmentInfo', 'technicians'));
    }

    public function getCustomerInfo($id)
    {
        $customer = Customer::where('customer_no', $id)->first();

    return response()->json($customer);
    }

    public function getMaterialsInfo($id)
    {
        $materials = Material::where('item_no', $id)->first();

    return response()->json($materials);
    }

    public function getEquipmentInfo($id)
    {
        $equipment = Equipment::where('custom_id', $id)->first();

    return response()->json($equipment);
    }

    public function getUnitType($itemNumber)
    {
        $material = Material::where('item_no', $itemNumber)->first();

        if ($material) {
            $unitType = $material->unit;
            return response()->json(['unit_type' => $unitType]);
        } else {
            // Handle the case when the item number is not found.
            return response()->json(['unit_type' => 'Unit Type Not Found']);
        }
    }

    public function getEquipmentUnitType($itemNumber)
    {
        $equipment = Equipment::where('custom_id', $itemNumber)->first();

        if ($equipment) {
            $unitType = $equipment->unit;
            return response()->json(['unit_type' => $unitType]);
        } else {
            return response()->json(['unit_type' => 'Unit Type Not Found']);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeTicket(Request $request)
    {
        // 1. Process the ticket data and save it to the 'tickets' table

        // Assuming you have already validated the ticket data, create a new ticket instance.
        $ticket = new Ticket();
        $ticket->status = 'new'; // You can set other ticket fields here
        $ticket->ticket_no = $request->ticket_no;
        $ticket->customer_number = $request->customer_number;
        $ticket->customer_name = $request->customer_name;
        $ticket->contact_number = $request->contact_number;
        $ticket->email_address = $request->email_address;
        $ticket->technician = $request->technician;
        $ticket->service_type = $request->service_type;
        $ticket->appointment_date = $request->appointment_date;
        $ticket->description = $request->description;
        // You may set other fields as needed

        // Save the ticket to the database
        $ticket->save();

        $materialItems = $request->input('materials');
            if ($materialItems && isset($materialItems['item_number_material'])) {
                foreach ($materialItems['item_number_material'] as $index => $itemNumber) {
                    //Check if the required fields are not empty
                    if (
                        isset($materialItems['item_name_material'][$index]) &&
                        isset($materialItems['unit_type_material'][$index]) &&
                        isset($materialItems['quantity_material'][$index]) &&
                        isset($materialItems['amount_material'][$index])
                    ) {
                    $materialQuotation = new Quotation();
                    $materialQuotation->ticket_id = $ticket->id;
                    $materialQuotation->item_number_material = $itemNumber;
                    $materialQuotation->item_name_material =  $materialItems['item_name_material'][$index];
                    $materialQuotation->unit_type_material =  $materialItems['unit_type_material'][$index];
                    $materialQuotation->quantity_material =  $materialItems['quantity_material'][$index];
                    $materialQuotation->amount_material =  $materialItems['amount_material'][$index];

                    // Convert the quantity and amount to numbers before performing the multiplication
                    $quantityMaterials = (float) ($materialQuotation->quantity_material ?? 0);
                    $amountMaterials = (float) ($materialQuotation->amount_material ?? 0);
                    $materialQuotation->total_amount_material = $quantityMaterials * $amountMaterials;
                    $materialQuotation->save();
                }
            }
        }

        // Process and save the equipment
        $equipmentItems = $request->input('equipment');
            if ($equipmentItems && isset($equipmentItems['item_number_equipment'])) {
                foreach ($equipmentItems['item_number_equipment'] as $index => $itemNumber) {
                    //Check if the required fields are not empty
                    if (
                        isset($equipmentItems['item_name_equipment'][$index]) &&
                        isset($equipmentItems['unit_type_equipment'][$index]) &&
                        isset($equipmentItems['quantity_equipment'][$index]) &&
                        isset($equipmentItems['amount_equipment'][$index])
                    ) {
                    $equipmentQuotation = new Quotation();
                    $equipmentQuotation->ticket_id = $ticket->id;
                    $equipmentQuotation->item_number_equipment = $itemNumber;
                    $equipmentQuotation->item_name_equipment = $equipmentItems['item_name_equipment'][$index];
                    $equipmentQuotation->unit_type_equipment = $equipmentItems['unit_type_equipment'][$index];
                    $equipmentQuotation->quantity_equipment = $equipmentItems['quantity_equipment'][$index];
                    $equipmentQuotation->amount_equipment = $equipmentItems['amount_equipment'][$index];

                    // Convert the quantity and amount to numbers before performing the multiplication
                    $quantityEquipment = (float) ($equipmentQuotation->quantity_equipment ?? 0);
                    $amountEquipment = (float) ($equipmentQuotation->amount_equipment ?? 0);
                    $equipmentQuotation->total_amount_equipment = $quantityEquipment * $amountEquipment;
                    $equipmentQuotation->save();
                }
            }
        }
        // Redirect to a success page or display a success message
        $notification = array(
            'message' => 'Ticket created Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('index.ticket')->with($notification);
    }

    /**
     * Display the specified resource.
     */
    public function ViewTicket($id)
    {
        $ticket = Ticket::findOrFail($id);

        return view('backend.tickets.view_ticket', compact('ticket'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    //public function editTicket($id)
    //{
    //    $ticket = Ticket::findOrFail($id);
    //    return view('tickets.edit', compact('ticket'));


    /**
     * Update the specified resource in storage.
     */
    public function UpdateTicket(Request $request, $id)
    {

        $notification = array(
            'message' => 'Ticket Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('index.ticket')->with($notification);
    }



    /**
     * Remove the specified resource from storage.
     */
    public function DestroyTicket($id)
    {
        $ticket = Ticket::findOrFail($id);

        // Delete the associated quotations
        $ticket->quotations()->delete();

        // Delete the ticket
        $ticket->delete();

        $notification = array(
            'message' => 'Ticket Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
