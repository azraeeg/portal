<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    use HasFactory;
    protected $connection = 'sqlsrv1';
    protected $table = 'antrian_poli';
    public $timestamps = false;
    protected  $guarded = [];

    public function User()
    {
        return $this->belongsTo(User::class, 'nopeg', 'NoPeg');
    }
}