<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;

class SupplierController extends Controller
{
    // GET /api/suppliers
    public function index()
    {
        $suppliers = Supplier::all(['id', 'name', 'logo_url', 'rating', 'categories']);
        return response()->json($suppliers);
        //  return response()->json(['message' => 'API is working!']);
    }

    // GET /api/suppliers/{id}
    public function show($id)
    {
        $supplier = Supplier::with('products')->find($id);

        if (!$supplier) {
            return response()->json(['message' => 'Supplier not found'], 404);
        }

        return response()->json($supplier);

        //   return response()->json(['message' => 'API is working!']);
    }
}
