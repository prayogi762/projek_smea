<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Slider;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;

class SliderController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        $sliders = Slider::latest()->get();
        return view('admin.slider_admin', compact('sliders'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'nullable|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        // Simpan file ke storage/app/public/sliders
        $imagePath = $request->file('image')->store('sliders', 'public');

        Slider::create([
            'judul' => $request->judul,
            'image' => $imagePath
        ]);

        // Hapus gambar lama jika jumlahnya lebih dari 6
        $count = Slider::count();
        // if ($count > 6) {
        //     $oldestSlider = Slider::orderBy('created_at')->first();
        //     if ($oldestSlider && Storage::disk('public')->exists($oldestSlider->image)) {
        //         Storage::disk('public')->delete($oldestSlider->image);
        //     }
        //     $oldestSlider?->delete();
        // }

        return redirect()->back()->with('success', 'Gambar berhasil ditambahkan.');
    }

    public function destroy($id)
    {
        $slider = Slider::findOrFail($id);

        if (Storage::disk('public')->exists($slider->image)) {
            Storage::disk('public')->delete($slider->image);
        }

        $slider->delete();

        return redirect()->back()->with('success', 'Gambar berhasil dihapus.');
    }
}
