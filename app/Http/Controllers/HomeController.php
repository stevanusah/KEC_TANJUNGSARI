<?php

namespace App\Http\Controllers;

use App\Models\Capaianskpd;
use App\Models\Demografi;
use App\Models\DetailLayanan;
use App\Models\Galeri;
use App\Models\IdentitasSkpd;
use App\Models\News;
use App\Models\Pengaduan;
use App\Models\Profil;
use App\Models\Regulasi;
use App\Models\Slider;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class HomeController extends Controller
{
    public function index()
    {
        $title = "Selamat datang di Website Kami!";
        $berita = News::where('user_id', '3')->where('is_active', 'Active')->orderBy('created_at', 'DESC')->limit(3)->get();
        $slider = Slider::where('user_id', '3')->where('is_active', 'Active')->orderBy('created_at', 'DESC')->limit(2)->get();
        $detail_layanan = DetailLayanan::where('user_id', '3')->where('is_active', 'Active')->orderBy('created_at', 'DESC')->limit(6)->get();
        $identitas = IdentitasSkpd::where('user_id', '3')->where('is_active', 'Active')->first();
        $profil = Profil::where('user_id', '3')->where('is_active', 'Active')->first();
        $regulasi = Regulasi::where('user_id', '3')->where('is_active', 'Active')->orderBy('created_at', 'DESC')->limit(6)->get();
        $galeri = Galeri::where('user_id', '3')->where('is_active', 'Active')->orderBy('created_at', 'DESC')->limit(6)->get();
        $capaian = Capaianskpd::where('user_id', '3')->where('is_active', 'Active')->first();
        $demografi = Demografi::where('user_id', '3')->where('is_active', 'Active')->first();

        return view('content_frontend.home', compact('berita', 'slider', 'identitas', 'profil', 'detail_layanan', 'regulasi', 'galeri', 'title', 'capaian', 'demografi'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'no_handphone' => 'required',
            'kritik_saran' => 'required',


        ], [
            'nama.required' => 'Profile Harus diisi!',
            'email.required' => 'Visi Harus diisi!',
            'no_handphone.required' => 'Misi Harus diisi!',
            'kritik_saran.required' => 'IKU Harus diisi!'
        ]);
        Pengaduan::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'no_handphone' => $request->no_handphone,
            'kritik_saran' => $request->kritik_saran,
            'is_active' => 'Active',
            'keterangan' => '-',
            'user_id' => $request->user_id
        ]);

        Alert()->success('Input Data Berhasil');
        return redirect(route('home.index'));
    }
}
