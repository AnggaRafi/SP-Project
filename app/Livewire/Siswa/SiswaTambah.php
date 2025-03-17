<?php

namespace App\Livewire\Siswa;

use App\Models\Siswa;
use Livewire\Component;
use Livewire\Attributes\On; 

class SiswaTambah extends Component
{
    

    #[On('open-modal')]
    public function ambilId()
    {
        $this->dispatch('open-modal', name: 'tambah-siswa');
    }


        public function render()
    {
        return view('livewire.siswa.siswa-tambah');
    }
}
