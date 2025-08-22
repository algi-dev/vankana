<?php

namespace App\Http\Controllers;

use App\Models\Accessibility;
use Illuminate\Http\Request;

class AccessibilityController extends Controller
{
    public function index()
    {
        $items = Accessibility::orderBy('order')->get();
        return view('admin.accessibilities', compact('items'));
    }

    public function create()
    {
        return view('admin.accessibility_create');
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

        Accessibility::create($request->all());

        return redirect()->route('admin.accessibilities')->with('success', 'Item berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $item = Accessibility::findOrFail($id);
        return view('admin.accessibility_edit', compact('item'));
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

        $item = Accessibility::findOrFail($id);
        $item->update($request->all());

        return redirect()->route('admin.accessibilities')->with('success', 'Item berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $item = Accessibility::findOrFail($id);
        $item->delete();

        return redirect()->route('admin.accessibilities')->with('success', 'Item berhasil dihapus!');
    }
}
