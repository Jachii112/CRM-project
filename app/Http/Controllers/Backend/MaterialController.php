<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Material;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    public function getMaterials()
    {
        $materials = Material::all();
        return response()->json($materials);
    }
}
