<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cuti extends Model
{
    protected $fillable = ['id_karyawan','name','jenis_cuti','tanggal_awal_cuti','tanggal_akhir_cuti','file'];
}
