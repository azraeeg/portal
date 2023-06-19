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


}