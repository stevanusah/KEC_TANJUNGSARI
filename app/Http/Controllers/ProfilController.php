<?php

namespace App\Http\Controllers;

use App\Models\Capaianskpd;
use App\Models\IdentitasSkpd;
use App\Models\Profil;
use Illuminate\Http\Request;
use Symfony\Component\CssSelector\Parser\Handler\IdentifierHandler;

class ProfilController extends Controller
{
    public function profil()
    {

        $title = "Profile Kami";
        $identitas = IdentitasSkpd::where('user_id', '10')->where('is_active', 'Active')->first();
        $profil = Profil::where('user_id', '10')->where('is_active', 'Active')->first();
        $capaian = Capaianskpd::where('user_id', '10')->where('is_active', 'Active')->first();
        return view('content_frontend.view_profil', compact('title', 'identitas', 'profil', 'capaian'));
    }

    public function visimisi()
    {
        $title = "Visi dan Misi Kami";
        $identitas = IdentitasSkpd::where('user_id', '10')->where('is_active', 'Active')->first();
        $profil = Profil::where('user_id', '10')->where('is_active', 'Active')->first();
        return view('content_frontend.view_visimisi', compact('title', 'identitas', 'profil'));
    }

    public function tupoksi()
    {
        $title = "Tugas Pokok dan Fungsi Kami";
        $identitas = IdentitasSkpd::where('user_id', '10')->where('is_active', 'Active')->first();
        $profil = Profil::where('user_id', '10')->where('is_active', 'Active')->first();
        return view('content_frontend.view_tupoksi', compact('title', 'identitas', 'profil'));
    }

    public function struktur()
    {
        $title = "Struktur Organisasi Kami";
        $identitas = IdentitasSkpd::where('user_id', '10')->where('is_active', 'Active')->first();
        $profil = Profil::where('user_id', '10')->where('is_active', 'Active')->first();
        return view('content_frontend.view_struktur', compact('title', 'identitas', 'profil'));
    }
}
