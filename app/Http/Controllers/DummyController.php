<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth,DB;
use App\Models\Mabar;

class DummyController extends Controller
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function index()
    {
        $halo = Mabar::get();
        dd($halo);
    }
}
