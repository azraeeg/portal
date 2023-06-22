<?php

namespace App\Http\Controllers;

use App\Models\Poli;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use Storage;

class PoliController extends BaseController
{
    public function poli($id_lorong)
    {
        $poli = DB::connection('mysql')->table('antrian_poli')->where('master_lorong_id', $id_lorong)->get();
        return view('poli.antrian', ['poli' => $poli]);
    }

    public function cari_poli($id_lorong)
    {   
        $poli = DB::connection('mysql')

            ->table('antrian_poli')
            ->where('master_lorong_id', $id_lorong)
            ->get();
        return Response()->json($poli);
    }

    public function cari_poli_admin($idLorong)
    {
        // Lakukan logika untuk mendapatkan nomor antrian terbaru berdasarkan ID lorong
        $poli = DB::connection('mysql')

            ->table('antrian_poli')
            ->where('master_lorong_id', $idLorong)
            ->orderBy('created_at', 'desc')
            ->first();
        
        if ($poli) {
            $noAntri = $poli->no_antri;
            
            // Ubah nomor antrian di database jika diperlukan, misalnya:
             $poli->no_antri = $noAntri + 1;
             $poli->save();

             return response()->json([
                'success' => true,
                'no_antri' => $noAntri,
            ]);
            
        }
        
        return response()->json([
            'success' => false,
            'no_antri' => null,
        ]);
    }

    public function updateNoAntri($idLorong)
    {
        // Lakukan logika untuk mendapatkan nomor antrian terbaru berdasarkan ID lorong
        $poli = Poli::find($idLorong);
        
        if ($poli) {
            $noAntri = $poli->no_antri + 1;
            $poli->no_antri = $noAntri;
            $poli->save();

            return response()->json([
                'success' => true,
                'no_antri' => $noAntri
            ]);
        }

        return response()->json([
            'success' => false
        ]);
    }

    public function poli_admin($id_lorong)
    {
        $poli = DB::connection('mysql')->table('antrian_poli')->where('master_lorong_id', $id_lorong)->get();
        return view('poli.admin', ['poli' => $poli]);
    }

    
    public function create_poli(){
        $poli = DB::connection('mysql')->table('antrian_poli');
        $lorong = DB::connection('mysql')->table('master_lorong')->get();
        return view('poli.create', compact('poli' , 'lorong'));
    }

    public function store_poli(Request $request)
    {
        DB::connection('mysql')->table('antrian_poli')->insert([
            'nama_dokter' => $request->nama_dokter,
            'nama_poli' => $request->nama_poli,
            'master_lorong_id' => $request->nama_lorong,
        ]);
        return redirect()->back()->with('success', 'Data Antrian Poli Berhasil Disimpan!');
    }



}