<?php

namespace App\Http\Controllers;

use App\Models\HomeSection;
use Illuminate\Http\Request;

class HomeSectionController extends Controller
{
    public function index()
    {
        $sections = HomeSection::orderBy('order')->get();
        return view('admin.home_sections', compact('sections'));
    }

    public function create()
    {
        return view('admin.home_section_create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:200',
            'description' => 'required|string',
            'button_text' => 'nullable|string|max:50',
            'button_link' => 'nullable|string|max:200',
            'image' => 'nullable|string|max:255',
            'order' => 'required|integer',
            'status' => 'required|boolean',
        ]);

        HomeSection::create($request->all());

        return redirect()->route('admin.home.sections')->with('success', 'Bagian Home berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $section = HomeSection::findOrFail($id);
        return view('admin.home_section_edit', compact('section'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:200',
            'description' => 'required|string',
            'button_text' => 'nullable|string|max:50',
            'button_link' => 'nullable|string|max:200',
            'image' => 'nullable|string|max:255',
            'order' => 'required|integer',
            'status' => 'required|boolean',
        ]);

        $section = HomeSection::findOrFail($id);
        $section->update($request->all());

        return redirect()->route('admin.home.sections')->with('success', 'Bagian Home berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $section = HomeSection::findOrFail($id);
        $section->delete();

        return redirect()->route('admin.home.sections')->with('success', 'Bagian Home berhasil dihapus!');
    }
}
