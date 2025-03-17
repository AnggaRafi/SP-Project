<?php

namespace App\Livewire\Siswa;

use App\Models\Siswa;
use Illuminate\Database\Eloquent\SoftDeletes;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\WithPagination;

class SiswaTable extends Component
{

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
    public function save()
    {

        Siswa::create([
            'nisn' => $this->nisn,
            'nis' => $this->nis,
            'nama' => $this->nama,
            'jenis_kelamin' => $this->jenis_kelamin,
            'agama' => $this->agama,
            'keterangan' => $this->keterangan,
            'ayah' => $this->ayah,
            'ibu' => $this->ibu,
            'no_telp_ayah' => $this->no_telp_ayah,
            'no_telp_ibu' => $this->no_telp_ibu,
        ]);


    }
   
   

    public function delete($id) {
        Siswa::with('riwayat')->find($id)->delete();
    }



    use WithPagination;
  

    public $search = '';
    public function render()
    {
        if($this->search == ''){
            $siswas = Siswa::paginate( 4);
        }
        else {
            $siswas = Siswa::where('nama', 'like', "%{$this->search}%")->paginate( 4);
        }

        $trashedSiswas = Siswa::onlyTrashed()->get();
        
        return view('livewire.siswa.siswa-table', compact('siswas', 'trashedSiswas'));
    }

    

}
