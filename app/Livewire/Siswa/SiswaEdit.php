<?php

namespace App\Livewire\Siswa;

use App\Models\Siswa;
use Livewire\Component;
use Livewire\Attributes\On;

class SiswaEdit extends Component
{
    public $siswa;

    public $nis = '';
    public $nisn = '';
    public $nama = '';
    public $jenis_kelamin = '';
    public $agama = '';
    public $keterangan = '';
    public $no_telp_ayah = '';
    public $ayah = '';
    public $ibu = '';
    public $no_telp_ibu = '';

    public function mount(Siswa $siswa){
        $this->nis = $siswa->nis;
        $this->nisn = $siswa->nisn;
        $this->nama = $siswa->nama;
        $this->jenis_kelamin = $siswa->jenis_kelamin;
        $this->agama = $siswa->agama;
        $this->keterangan = $siswa->keterangan;
        $this->no_telp_ayah = $siswa->no_telp_ayah;
        $this->ayah = $siswa->ayah;
        $this->ibu = $siswa->ibu;
        $this->no_telp_ibu = $siswa->no_telp_ibu;
    }
    public function editSiswa($id)
    {
        Siswa::find($id)->update(
            [
                'nis' => $this->nis,
                'nisn' => $this->nisn,
                'nama' => $this->nama,
                'agama' => $this->agama,
                'ayah' => $this->ayah,
                'ibu' => $this->ibu,
                'jenis_kelamin' => $this->jenis_kelamin,
                'no_telp_ayah' => $this->no_telp_ayah,
                'no_telp_ibu' => $this->no_telp_ibu,
                'keterangan' => $this->keterangan,
            ]);
            $this->redirect('/'); 
        }

    public function render()
    {
        return view('livewire.siswa.siswa-edit');
    }
}
