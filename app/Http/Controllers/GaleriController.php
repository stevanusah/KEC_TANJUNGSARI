<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function index()
    {
        $galeri = Galeri::where('user_id', '10')->where('is_active', 'Active')->orderBy('created_at', 'DESC')->paginate(6);
        $title = "Galeri Publik!";
        return view('content_frontend.view_galeri', compact('title', 'galeri'));
    }
}
