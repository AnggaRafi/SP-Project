<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function edit(Request $request) {
        
        $id = $request->input('siswa_id'); // Get the ID from the form
        $siswa = Siswa::find($id); // Find student by ID

     

        return view('pages.editSiswa',   [
            'siswa' => $siswa
         ]);
    }

}
