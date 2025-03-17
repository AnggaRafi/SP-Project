<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Siswa extends Model
{
    use SoftDeletes;
    protected $table = 'tbl_siswa';

    protected $fillable = ['nisn' , 'nis' , 'nama' , 'jenis_kelamin', 'agama', 'keterangan', 'ayah', 'ibu', 'no_telp_ayah', 'no_telp_ibu'];

    public function riwayat(): HasMany {
        return $this->hasMany(Riwayat::class, 'id_siswa');
    }

}
