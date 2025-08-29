<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    // Untuk web utama: tampilkan kamar aktif
    public function index()
    {
        $rooms = Room::where('status', true)->get();
        return view('rooms', compact('rooms'));
    }

    // Untuk admin: semua kamar
    public function adminIndex()
    {
        $rooms = Room::all();
        return view('admin.rooms', compact('rooms'));
    }

    public function create()
    {
        return view('admin.room_create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'slug' => 'required|string|max:100|unique:rooms,slug',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'image' => 'required|string',
            'booking_link' => 'required|url',
            'status' => 'required|boolean',
            'capacity' => 'nullable|integer',
            'size' => 'nullable|string|max:50',
        ]);

        Room::create($request->all());

        return redirect()->route('admin.room')->with('success', 'Kamar berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $room = Room::findOrFail($id);
        return view('admin.room_edit', compact('room'));
    }

    public function update(Request $request, $id)
    {
        $room = Room::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:100',
            'slug' => 'required|string|max:100|unique:rooms,slug,' . $id,
            'description' => 'required|string',
            'price' => 'required|numeric',
            'image' => 'required|string',
            'booking_link' => 'required|url',
            'status' => 'required|boolean',
            'capacity' => 'nullable|integer',
            'size' => 'nullable|string|max:50',
        ]);

        $room->update($request->all());

        return redirect()->route('admin.room')->with('success', 'Kamar berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $room = Room::findOrFail($id);
        $room->delete();

        return redirect()->route('admin.room')->with('success', 'Kamar berhasil dihapus!');
    }
}
