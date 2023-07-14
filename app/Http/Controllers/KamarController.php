<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use Storage;

class KamarController extends Controller
{
    public function kamar($kode_ruang)
    {
        $kamar = DB::connection('sqlsrv1')->table('bpjs_kamar_detail')->where('kodekategori', $kode_ruang)->get();
        // dd($kamar);
        return view('kamar.readkamar', ['kamar' => $kamar]);
    }

    public function cari_status($id_status){
        $kamar = DB::connection('sqlsrv1')->find($id_status);
        dd($kamar);

        if ($kamar) {
            return response()->json([
                'success' => true,
                'status' => $kamar->status
            ]);
        }

        return response()->json([
            'success' => false
        ]);
    }
}