<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

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
            'image' => 'required|file|image|max:2048|mimes:jpeg,png,jpg,webp,gif',
            'booking_link' => 'required|url',
            'status' => 'required|boolean',
            'capacity' => 'nullable|integer',
            'size' => 'nullable|string|max:50',
        ]);

        // Simpan gambar ke storage
        $imagePath = $this->storeImage($request->file('image'));

        // Simpan ke database
        Room::create(array_merge($request->all(), [
            'image' => $imagePath
        ]));

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
            'image' => 'nullable|file|image|max:2048|mimes:jpeg,png,jpg,webp,gif',
            'booking_link' => 'required|url',
            'status' => 'required|boolean',
            'capacity' => 'nullable|integer',
            'size' => 'nullable|string|max:50',
        ]);

        // Data dasar (kecuali image)
        $data = $request->except('image');

        // Jika ada gambar baru
        if ($request->hasFile('image')) {
            // Hapus gambar lama dari storage
            $this->deleteImage($room->image);
            // Simpan gambar baru
            $data['image'] = $this->storeImage($request->file('image'));
        } else {
            // Pertahankan gambar lama
            $data['image'] = $room->image;
        }

        $room->update($data);

        return redirect()->route('admin.room')->with('success', 'Kamar berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $room = Room::findOrFail($id);

        // Hapus file gambar dari storage
        $this->deleteImage($room->image);

        $room->delete();

        return redirect()->route('admin.room')->with('success', 'Kamar berhasil dihapus!');
    }

    // === Helper Methods ===

    /**
     * Simpan gambar ke storage/app/public/images
     * @param \Illuminate\Http\UploadedFile $file
     * @return string
     */
    private function storeImage($file)
    {
        $name = time() . '_' . Str::slug(pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME));
        $extension = $file->getClientOriginalExtension();
        $filename = $name . '.' . $extension;

        // Simpan ke disk 'public' → storage/app/public/images
        $path = $file->storeAs('images', $filename, 'public');

        // Kembalikan path untuk disimpan di DB: storage/images/filename.jpg
        return 'storage/' . $path;
    }

    /**
     * Hapus gambar dari storage
     * @param string $imagePath
     * @return void
     */
    private function deleteImage($imagePath)
    {
        if ($imagePath) {
            // Ubah 'storage/images/...' → 'images/...'
            $storagePath = str_replace('storage/', '', $imagePath);

            // Hapus jika file ada
            if (Storage::disk('public')->exists($storagePath)) {
                Storage::disk('public')->delete($storagePath);
            }
        }
    }
}
