<?php

namespace App\Http\Controllers;

use App\Models\Regulasi;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Redirect;
// use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;

class RegulasiController extends Controller
{

    public function index()
    {
        $title = "Download Regulasi / Dokumen kami disini!";
        return view('content_frontend.view_regulasi', compact('title'));
    }

    public function datatable(Request $request)
    {
        //dd($request->all());

        $data = Regulasi::when($request->date, function ($query, $date) {

            $query->whereDate('created_at', $date);
        });
        //dd($data->toSql());

        return datatables($data)
            ->addIndexColumn()

            ->addColumn('action', function ($query) {
                $show = '<a href="' . route('front.view_detailregulasi', $query->id) . '" class="btn btn-info"><span class="fa fa-search"></span></a>';
                $edit = '<a href="' . route('front.downloadreg', $query->id) . '" class="btn btn-warning"><span class="fa fa-download"></span></a>';
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
        $data = Regulasi::find($id);
        $title = "View Regulasi Publik!";
        return view('content_frontend.view_detailregulasi', compact('data', 'title'));
    }


    public function getDownload($id)
    {

        $data = Regulasi::find($id);
        // $file_name = $data->regulasi_file;
        // $header = ['Content-Type' => 'application/pdf'];
        // $down = "https://portal-skpd.sumedangkab.go.id/" . $file_name;
        // // $doc = str_replace(array("/", "\\", ":", "*", "?", "«", "<", ">", "|"), "-", $file_name);
        // // return response()->streamDownload(function () {
        // //     echo file_get_contents('https://portal-skpd.sumedangkab.go.id/', (URL::to($data->regulasi_file));
        // // });

        // // return response()->streamDownload('https://portal-skpd.sumedangkab.go.id/' . URL::to($file_name));

        // //return Redirect::to('https://portal-skpd.sumedangkab.go.id/' . $regulasi_file->nama_regulasi);
        // // $data = Regulasi::find($regulasi_file);

        // // $filename = $regulasi_file->nama_regulasi . '-' . $regulasi_file->created_at;
        // // $tempImage = tempnam(sys_get_temp_dir(), $filename);
        // // copy('https://portal-skpd.sumedangkab.go.id', $tempImage);

        // $result = response()->download($down, $file_name, $header);

        // dd($result);

        $file = $data->regulasi_file;
        $files = explode('/', $file);
        $filename = end($files);

        $tempImage = tempnam(sys_get_temp_dir(), $filename);
        copy('https://portal-skpd.sumedangkab.go.id/' . $file, $tempImage);

        return response()->download($tempImage, $filename);

        // $filename = $data->regulasi_file;
        // $down = "https://portal-skpd.sumedangkab.go.id/" . $filename;

        // return response()->streamDownload(function () {
        //     file_get_contents($down);
        // }, 'download.pdf');



        // $file_path = 'https://portal-skpd.sumedangkab.go.id/'($regulasi_file);
        // return response()->download($file_path);

        // if (Storage::disk('public')->exists($data->document)) {
        //     $name = str_replace('/', '-', $data->number_regulation);
        //     return Storage::disk('public')->download($data->document, $name . '.pdf');
        // } else {
        //     popup::error('Error', 'File Not Found!');
        //     return back();
        // }
        //dd($data, Storage::url($data->document));
        //return response()->download(Storage::disk('public')->url($data->document));
        //dd(Storage::disk('public')->url($data->document));
        // $filePath = Storage::disk('public/' . $id);
        // $headers = ['Content-Type: application/pdf'];
        // $fileName = time() . '.pdf';

        // return response()->download($filePath, $fileName, $headers);

        // return FacadeResponse::download($filePath, $fileName, $headers);

        // return response()->download($filePath, $fileName, $headers);

        // try {
        //     return Storage::disk('local')->down('public/' . $id);
        // } catch (\Exception $e) {
        //     return $e->getMessage();
        // }
    }
}
