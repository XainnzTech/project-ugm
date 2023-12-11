<?php

namespace App\Http\Controllers;

use App\Models\Laptop;
use Illuminate\Http\Request;

class LaptopController extends Controller
{
    public function index()
    {
        $laptops = Laptop::all();
        $i = 1;
        return view('form.index', compact('laptops', 'i'));
    }

    public function create()
    {
        return view('pages.form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'telp' => 'required|string',
            'email' => 'required|email',
            'product' => 'required|string',
            'tgl_peminjaman' => 'required|date',
        ]);

        Laptop::create($request->all());

        return redirect()->back()
            ->with('success', 'Data added successfully');
    }

    public function edit(Laptop $laptop)
    {
        return view('form.edit', compact('laptop'));
    }

    public function update(Request $request, Laptop $laptop)
    {
        $request->validate([
            'name' => 'string',
            'telp' => 'string',
            'email' => 'required|email',
            'product' => 'string',
            'status' => 'string',
            'tgl_peminjaman' => 'date'
        ]);

        $laptop->update($request->all());

        return redirect()->route('laptops')
            ->with('success', 'Data updated successfully');
    }

    public function destroy(Laptop $laptop)
    {
        $laptop->delete();

        return redirect()->route('laptops')
            ->with('success', 'Data deleted successfully');
    }
}
