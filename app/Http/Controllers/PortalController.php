<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use Storage;

class PortalController extends BaseController
{
    public function portal()
    {
        $portal = DB::connection('mysql1')->table('portal_apk')->get();
        return view('portal-apk.read', ['portal' => $portal]);
    }


}