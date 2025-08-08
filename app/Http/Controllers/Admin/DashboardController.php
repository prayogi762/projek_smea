<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
{
    $userName = Auth::user()->name;
    $email = Auth::user()->email;

    return view('admin.dashboard', [
        'userName' => $userName,
        'email' => $email
    ]);
}
}
