<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($customerID) {
            $latestCustomer = Customer::latest('id')->first();

            if($latestCustomer) {
                $numericPortion = (int)str_replace('C', '', $latestCustomer->customer_no);
                $numericPortion++;
                $customerID->customer_no = 'C' . $numericPortion;
            } else {
                $customerID->customer_no = 'C1';
            }
        });
    }

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }

}
