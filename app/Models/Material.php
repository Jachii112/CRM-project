<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $table = 'materials';

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }

}
