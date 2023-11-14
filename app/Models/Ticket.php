<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Ticket extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($ticket) {
            $latestTicket = Ticket::latest('id')->first();

            if($latestTicket) {
                $numericPortion = (int)str_replace('T', '', $latestTicket->ticket_no);
                $numericPortion++;
                $ticket->ticket_no = 'T' . $numericPortion;
            } else {
                $ticket->ticket_no = 'T1';
            }
        });
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_number', 'customer_no');
    }

    public function material()
    {
        return $this->belongsTo(Material::class,'item_number_material','item_no');
    }

    public function equipment()
    {
        return $this->belongsTo(Equipment::class,'item_number_equipment','custom_id');
    }

    public function quotations()
    {
        return $this->hasMany(Quotation::class);
    }

    public function materials()
    {
        return $this->hasMany(Material::class);
    }

    public function equipments()
    {
        return $this->hasMany(Equipment::class);
    }

}
