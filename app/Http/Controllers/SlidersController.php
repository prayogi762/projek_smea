<?php

namespace App\Http\Controllers\user;
use App\Models\Slider; 
use Illuminate\Http\Request;

class SlidersController extends Controller
{
    public function slider()
    {
    $sliders = Slider::latest()->get();
    dd($sliders); 
    return view('home.HomePage', compact('sliders'));
    }
}
