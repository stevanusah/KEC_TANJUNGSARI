<?php

namespace App\Http\Controllers;

use App\Models\Dokumen;
use App\Models\Ppid;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PpidController extends Controller
{
    public function index()
    {
        $title = "PPID";
        $head_ppid = Ppid::where('user_id', '3')->where('is_active', 'Active')->first();
        return view('content_frontend.view_ppid', compact('title', 'head_ppid'));
    }

    public function datatable(Request $request)
    {
        //dd($request->all());

        $data = Dokumen::when($request->date, function ($query, $date) {

            $query->whereDate('created_at', $date);
            $query->where('user_id', 3);
        });
        //dd($data->toSql());

        return datatables($data)
            ->addIndexColumn()

            ->addColumn('action', function ($query) {
                $show = '<a href="' . route('front.view_detaildokumen', $query->id) . '" class="btn btn-info"><span class="fa fa-search"></span></a>';
                $edit = '<a href="' . route('front.downloadppid', $query->id) . '" class="btn btn-warning"><span class="fa fa-download"></span></a>';
                return $show . $edit;
            })

            ->editColumn('is_active', function ($query) {
                if ($query->is_active == 'Active') {
                    $stat = '<span class="badge badge-success">' . 'Data Berlaku' . '</span>';
                } elseif ($query->is_active == 'Tidak Active') {
                    $stat = '<span class="badge badge-danger">' . 'Data Tidak Berlaku' . '</span>';
                }
                return $stat;
            })

            ->editColumn('created_at', function ($query) {
                return '<center>' . Carbon::parse($query->created_at)->format('d M Y') . '</center>';
            })
            ->editColumn('description', function ($query) {
                return $query->description;
            })

            ->rawColumns(['is_active', 'created_at', 'action', 'description'])

            ->make(true);
    }

    public function detail($id)
    {
        $data = Dokumen::find($id);
        $title = "View Dokokumen Publik PPID!";
        return view('content_frontend.view_detaildokumen', compact('data', 'title'));
    }

    public function getDownload($id)
    {

        $data = Dokumen::find($id);

        $file = $data->dokumen_file;
        $files = explode('/', $file);
        $filename = end($files);

        $tempImage = tempnam(sys_get_temp_dir(), $filename);
        copy('https://portal-skpd.sumedangkab.go.id/' . $file, $tempImage);

        return response()->download($tempImage, $filename);
    }
}
