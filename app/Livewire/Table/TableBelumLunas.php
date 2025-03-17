<?php

namespace App\Livewire\Table;

use App\Models\Riwayat;
use Livewire\Component;
use Livewire\WithPagination;

class TableBelumLunas extends Component
{
    public $search = '';
    use WithPagination;
    public function render()
    {
        if($this->search == ''){
            $datas = Riwayat::with('siswa')
            ->where('status_bayar', 'Belum Lunas')
            ->whereHas('siswa', function ($query) {
                $query->whereNull('deleted_at');
            })
            ->orderBy('id_siswa', 'asc')
            ->paginate(10);
        }
        else {
            $datas = Riwayat::with('siswa')
                ->where('status_bayar', 'Belum Lunas')
                ->whereHas('siswa', function ($query) {
                    $query
                    ->whereNull('deleted_at')
                    ->where('nama', 'like', "%{$this->search}%"); // Move 'nama' condition here
                })
                ->orderBy('id_siswa', 'asc')
                ->paginate(10);
        }
        
        return view('livewire.table.table-belum-lunas', compact('datas'));
    }
 
    public function submitBayar($id){
        Riwayat::find($id)->update(['status_bayar' => 'Lunas', 'nominal_asli' => Riwayat::find($id)->nominal_byr]);
    }
}
