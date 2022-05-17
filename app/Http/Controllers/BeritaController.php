<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        $title = "Berita Publik!";
        $berita = News::where('user_id', '3')->where('is_active', 'Active')->orderBy('created_at', 'DESC')->paginate(6);
        return view('content_frontend.view_berita', compact('title', 'berita'));
    }

    public function detail($id)
    {
        $title = "Detail Berita Publik!";
        //$berita = News::find($id);
        $berita = News::where('user_id', '3')->where('is_active', 'Active')->where('id', $id)->first();
        return view('content_frontend.view_detailberita', compact('title', 'berita'));
    }
}
