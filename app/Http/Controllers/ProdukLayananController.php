<?php

namespace App\Http\Controllers;

use App\Models\DetailLayanan;
use App\Models\ProdukLayanan;
use Illuminate\Http\Request;

class ProdukLayananController extends Controller
{
    public function head_pl()
    {

        $title = "Produk Layanan Kami";
        $pl = ProdukLayanan::where('user_id', '10')->where('is_active', 'Active')->first();
        $pls = DetailLayanan::where('user_id', '10')->where('is_active', 'Active')->orderBy('created_at', 'DESC')->paginate(6);
        $dpls = DetailLayanan::where('user_id', '10')->where('is_active', 'Active')->get();
        return view('content_frontend.view_produklayanan', compact('title', 'pl', 'pls', 'dpls'));
    }

    public function detail($id)
    {
        $title = "Detail Produk Layanan";
        $pl = ProdukLayanan::where('user_id', '10')->where('is_active', 'Active')->first();
        $dtllayanan = DetailLayanan::where('user_id', '10')->where('is_active', 'Active')->where('id', $id)->first();
        return view('content_frontend.view_detailproduklayanan', compact('title', 'pl', 'dtllayanan'));
    }
}
