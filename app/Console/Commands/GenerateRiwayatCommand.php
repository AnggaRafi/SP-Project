<?php

namespace App\Console\Commands;

use App\Models\Siswa;
use App\Models\Riwayat;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class GenerateRiwayatCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:generate-riwayat-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //Pertama kita ambil id dari masing masing siswa
        $siswas = Siswa::all(['id', 'nominal_per_bulan']);

        foreach ($siswas as $siswa) {
            Riwayat::create([
                'id_siswa' => $siswa->id,
                'bulan' => now()->format('F-y'),
                'nominal_byr' => 0,
                'nominal_asli' => $siswa->nominal_per_bulan, // Now this works
                'status_bayar' => 'Belum Lunas',
                'bukti' => '-',
                'keterangan' => '-',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        } 
        
    }
}
