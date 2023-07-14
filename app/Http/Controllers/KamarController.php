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
    public function kamar_admin(Request $request, $kode_ruang)
    {
        $keyword = $request->get('namakamar');
        if (!empty($keyword)) {
            $kamar = DB::connection('sqlsrv1')->table('bpjs_kamar_detail')->where('namakamar', 'like', '%' . $keyword . '%')->get();
        } else {
            $kamar = DB::connection('sqlsrv1')->table('bpjs_kamar_detail')->where('kodekategori', $kode_ruang)->get();
            // $poli = null;
        }
        $list_kamar = DB::connection('sqlsrv1')->table('bpjs_kamar_detail')->get();
        return view('kamar.adminkamar', ['kamar' => $kamar, 'kode_ruang' => $kode_ruang, 'list_kamar' => $list_kamar, 'keyword' => $keyword]);
    }

    public function cari_kamar($kode_ruang)
    {
        $kamar = DB::connection('sqlsrv1')

            ->table('bpjs_kamar_detail')
            ->where('kodekategori', $kode_ruang)
            ->get();

        return Response()->json($kamar);
    }
}