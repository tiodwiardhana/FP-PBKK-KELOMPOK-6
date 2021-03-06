<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Transaksi;
use App\Studio;

class Jadwal extends Model
{
    protected $table = "jadwal";
    protected $primaryKey = 'kode_jadwal';
    public $timestamps = false;
    public $incrementing = false;

    function transaksi() {
        return $this->hasMany(Transaksi::class);
    }

    function studio() {
        return $this->hasMany(Studio::class);
    }
}
