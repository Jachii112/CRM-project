<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = [
        'item_description',
        'category',
        'unit',
        'stocks',
        'status',
        'reserved',
        'modified'
    ];
}
