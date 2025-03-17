<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Riwayat extends Model
{
    protected $table = 'tbl_riwayat';

    protected $guarded = [];
    protected $fillable = ['bulan' , 'nominal_byr' , 'nominal_asli' , 'status_bayar' , 'id_siswa'];

    public function siswa(): BelongsTo {
        return $this->belongsTo(Siswa::class, 'id_siswa', 'id');
    }
}
