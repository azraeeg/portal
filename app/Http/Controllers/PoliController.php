<?php

namespace App\Http\Controllers;

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