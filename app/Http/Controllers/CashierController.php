<?php

namespace App\Http\Controllers;

use App\Models\Kasir;
use Illuminate\Http\Request;

class CashierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('produk.index');
    }

    public function index_kasir()
    {
        $kasir = Kasir::all();
        return view('produk.cashier', compact('kasir'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('produk.cashier_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_code' => 'required',
            'product_name' => 'required',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric',
        ]);

        $subtotal = $request->price * $request->quantity;
        
        Kasir::create([
            'product_code' => $request->product_code,
            'product_name' => $request->product_name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'subtotal' => $subtotal,
        ]);

        return redirect()->route('produk_kasir')->with('success', 'Product added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kasir = Kasir::findOrFail($id);
        return view('produk.cashier_edit', compact('kasir'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'product_code' => 'required',
            'product_name' => 'required',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric',
        ]);

        $kasir = Kasir::findOrFail($id);
        $subtotal = $request->price * $request->quantity;
        
        $kasir->update([
            'product_code' => $request->product_code,
            'product_name' => $request->product_name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'subtotal' => $subtotal,
        ]);

        return redirect()->route('produk_kasir')->with('success', 'Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kasir = Kasir::findOrFail($id);
        $kasir->delete();

        return redirect()->route('produk_kasir')->with('success', 'Product deleted successfully');
    }

    /**
     * Remove all records from storage.
     */
    public function destroy_all()
    {
        Kasir::truncate();
        
        return redirect()->route('produk_kasir')->with('success', 'All products deleted successfully');
    }
}
