<?php

namespace App\Livewire\Siswa;

use App\Models\Riwayat;
use Livewire\Component;
use Livewire\Attributes\On;

class SiswaRiwayat extends Component
{
    public $dodo = [];

    #[On('id-siswa')]

    public function ambilId($id)
    {
        $this->dodo = Riwayat::where('id_siswa', $id)->get();

        $this->dispatch('open-modal', name: 'riwayat-bayar');

    }

    public function batalBayar($id){


        Riwayat::find($id)->update(['status_bayar' => 'Belum Lunas', 'nominal_asli' => '0']);
    }

    public function submitBayar($id){

        $riwayat = Riwayat::find($id);
        Riwayat::find($id)->update(['status_bayar' => 'Lunas' , 'nominal_asli' => $riwayat->nominal_byr]);
    }
   
    public function render()
    {
        return view('livewire.siswa.siswa-riwayat', ['dodo' => $this->dodo]);
    }
}
