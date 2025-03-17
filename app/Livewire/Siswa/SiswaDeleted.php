<?php

namespace App\Livewire\Siswa;

use App\Models\Siswa;
use Livewire\Component;

class SiswaDeleted extends Component
{
    public function restore($id) {
        Siswa::withTrashed()->find($id)->restore();
    }

    public function deleteForever($id) {
        Siswa::withTrashed()->find($id)->forceDelete();
    }


    public function render()
    {
        $trashedSiswas = Siswa::onlyTrashed()->get();

        return view('livewire.siswa.siswa-deleted' , compact('trashedSiswas'));
    }
}
