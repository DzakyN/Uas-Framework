<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;

class SupplierController extends Controller
{
    public function index()
    {
        $suppliers = Supplier::all();
        return view('suppliers.index', compact('suppliers'));
    }

    public function create()
    {
        return view('suppliers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'contact' => 'required',
            'alamatSupplier' => 'required',
            'telepon' => 'required',
            'email' => 'required|email|unique:suppliers',
            'contactPerson' => 'required',
        ]);

        Supplier::create($request->all());

        return redirect()->route('suppliers.index');
    }

    public function show(Supplier $supplier)
    {
        return view('suppliers.show', compact('supplier'));
    }

    public function edit(Supplier $supplier)
    {
        return view('suppliers.edit', compact('supplier'));
    }

    public function update(Request $request, Supplier $supplier)
    {
        $request->validate([
            'name' => 'required',
            'contact' => 'required',
            'alamatSupplier' => 'required',
            'telepon' => 'required',
            'email' => 'required|email|unique:suppliers,email,' . $supplier->id,
            'contactPerson' => 'required',
        ]);

        $supplier->update($request->all());

        return redirect()->route('suppliers.index');
    }

    public function destroy(Supplier $supplier)
    {
        $supplier->delete();
        return redirect()->route('suppliers.index');
    }
}
