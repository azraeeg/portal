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
    public function resetNoAntri($idLorong)
    {
        // Lakukan logika untuk mendapatkan nomor antrian terbaru berdasarkan ID lorong
        $poli = Poli::find($idLorong);

        if ($poli) {
            $poli->no_antri = 0;
            $poli->save();


            return response()->json([
                'success' => true,
                'no_antri' => 0
            ]);
        }

        return response()->json([
            'success' => false
        ]);
    }


    public function poli_admin(Request $request, $id_lorong)
    {
        $keyword = $request->get('nama_dokter');
        if (!empty($keyword)) {
            $poli = Poli::where('nama_dokter', 'like', '%' . $keyword . '%')->get();
        } else {
            $poli = DB::connection('mysql')->table('antrian_poli')->where('master_lorong_id', $id_lorong)->get();
            // $poli = null;
        }
        $list_dokter = Poli::get();
        return view('poli.admin', ['poli' => $poli, 'id_lorong' => $id_lorong, 'list_dokter' => $list_dokter, 'keyword' => $keyword]);
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

    public function cari_antrian($id_antrian){
        $poli = Poli::find($id_antrian);

        if ($poli) {
            return response()->json([
                'success' => true,
                'no_antri' => $poli->no_antri
            ]);
        }

        return response()->json([
            'success' => false
        ]);

        return response()->json([
            'success' => false
        ]);
    }
    



}