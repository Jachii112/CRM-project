<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseOrderMaterial extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($latestOrder) {
            $latestOrderRecord = PurchaseOrderMaterial::latest('id')->first();

            if ($latestOrderRecord) {
                $numericPortion = (int) str_replace('OR-', '', $latestOrderRecord->order_no);
                $numericPortion++;
                $latestOrder->order_no = 'OR-' . $numericPortion;
            } else {
                $latestOrder->order_no = 'OR-1';
            }
        });
    }

}
