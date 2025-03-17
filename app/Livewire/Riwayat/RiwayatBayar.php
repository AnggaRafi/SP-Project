<?php

namespace App\Livewire\Riwayat;

use App\Models\Riwayat;
use Livewire\Component;
use Livewire\Attributes\On; 

class RiwayatBayar extends Component
{

    #[On('id-siswa')]

    public function ambilId($id)
    {
        dd($id);
    }

    public function render()
    {
    
        return view('livewire.riwayat.riwayat-bayar');
    }
}
