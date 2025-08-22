<?php

namespace App\Http\Controllers;

use App\Models\HotelPolicy;
use Illuminate\Http\Request;

class HotelPolicyController extends Controller
{
    public function index()
    {
        $policies = HotelPolicy::orderBy('order')->get();
        return view('admin.hotel_policies', compact('policies'));
    }

    public function create()
    {
        return view('admin.hotel_policy_create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:100',
            'icon' => 'required|string|max:50',
            'description' => 'required|string',
            'order' => 'required|integer',
            'status' => 'required|boolean',
        ]);

        HotelPolicy::create($request->all());

        return redirect()->route('admin.hotel.policies')->with('success', 'Kebijakan berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $policy = HotelPolicy::findOrFail($id);
        return view('admin.hotel_policy_edit', compact('policy'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:100',
            'icon' => 'required|string|max:50',
            'description' => 'required|string',
            'order' => 'required|integer',
            'status' => 'required|boolean',
        ]);

        $policy = HotelPolicy::findOrFail($id);
        $policy->update($request->all());

        return redirect()->route('admin.hotel.policies')->with('success', 'Kebijakan berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $policy = HotelPolicy::findOrFail($id);
        $policy->delete();

        return redirect()->route('admin.hotel.policies')->with('success', 'Kebijakan berhasil dihapus!');
    }
}
