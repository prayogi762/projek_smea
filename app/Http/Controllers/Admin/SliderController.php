<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;

class SliderController extends Controller
{


public function index()
{
    $sliders = Slider::latest()->take(6)->get(); // Ambil 6 slider terbaru
    return view('admin.slider_admin', compact('sliders'));
}

  public function create()
    {
        return view('admin.slider.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        // Upload gambar
        $imagePath = $request->file('image')->store('sliders', 'public');

        // Hapus slider lama jika sudah lebih dari 6
        $sliderCount = Slider::count();
        if ($sliderCount >= 6) {
            $oldestSlider = Slider::oldest()->first();
            if ($oldestSlider) {
                // Hapus gambar dari storage
                Storage::disk('public')->delete($oldestSlider->image);
                // Hapus data dari DB
                $oldestSlider->delete();
            }
        }

        // Simpan data slider
        Slider::create([
            'image' => $imagePath
        ]);

        return redirect()->route('slider.index')->with('success', 'Slider berhasil ditambahkan');
    }

    public function destroy($id)
    {
        $slider = Slider::findOrFail($id);
        Storage::disk('public')->delete($slider->image);
        $slider->delete();

        return redirect()->route('slider.index')->with('success', 'Slider berhasil dihapus');
    }
}
