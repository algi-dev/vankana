<?php

namespace App\Http\Controllers;

use App\Models\Facility;
use Illuminate\Http\Request;

class FacilityController extends Controller
{
    public function index()
    {
        $facilities = Facility::all();
        return view('admin.facilities', compact('facilities'));
    }

    public function create()
    {
        return view('admin.facility_create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'icon' => 'nullable|string',
            'status' => 'required|boolean',
        ]);

        Facility::create($request->all());

        return redirect()->route('admin.facilities')->with('success', 'Fasilitas berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $facility = Facility::findOrFail($id);
        return view('admin.facility_edit', compact('facility'));
    }

    // ✅ Hanya 1 kali update() — ini yang benar
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'icon' => 'nullable|string',
            'status' => 'required|boolean',
        ]);

        $facility = Facility::findOrFail($id);
        $facility->update($request->all());

        return redirect()->route('admin.facilities')->with('success', 'Fasilitas berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $facility = Facility::findOrFail($id);
        $facility->delete();

        return redirect()->route('admin.facilities')->with('success', 'Fasilitas berhasil dihapus!');
    }
}
