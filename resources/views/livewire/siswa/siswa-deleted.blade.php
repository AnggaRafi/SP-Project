<div class="flex flex-col p-10 pb-5">
    <div class="pt-1 pl-2 bg-gray-300 border border-gray-400 rounded-t-sm">
        <label>Search:</label>
        <input class="appearance-none w-1/4 bg-white text-gray-700 border border-gray-200 ml-1 rounded py-1 mb-1 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
        placeholder="Cari Nama"/>
    </div>
    <table class="w-full bg-white text-sm shadow-md">
        <thead class="bg-gray-500">
            <tr>
                <th class="font-[600] p-3 pb-1 pt-1 text-slate-100  text-center border border-gray-700">
                    NIS
                </th>
                <th class="font-[600] p-3 pb-1 pt-1 text-slate-100  text-center border border-gray-700">
                    NISN
                </th>
                <th class="font-[600] p-3 pb-1 pt-1 text-slate-100  text-center border border-gray-700">
                    Nama Siswa
                </th>
                <th class="font-[600] p-3 pb-1 pt-1 text-slate-100  text-center border border-gray-700">
                    Jenis Kelamin
                </th>
                <th class="font-[600] p-3 pb-1 pt-1 text-slate-100  text-center border border-gray-700">
                    Aksi
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($trashedSiswas as $trashedSiswa)
                <tr wire:key="{{ $trashedSiswa->id }}">
                    <td class="p-3 pt-1 pb-1 text-black font-[600] border border-gray-400">{{ $trashedSiswa->nis }}</td>
                    <td class="p-3 pt-1 pb-1 text-black font-[500] border border-gray-400">{{ $trashedSiswa->nisn }}</td>
                    <td class="p-3 pt-1 pb-1 text-black font-[500] border border-gray-400">{{ $trashedSiswa->nama }}</td>
                    <td class="p-3 pt-1 pb-1 text-black font-[500] border border-gray-400">{{ $trashedSiswa->jenis_kelamin }}
                    </td>
                    <td class="w-[17%] p-3 pt-1 pb-1 text-black font-[500] border border-gray-400 items-center">
                        <button class="rounded-sm p-1 m-0 bg-green-400 border border-white hover:bg-green-500 hover:text-white hover:border-black" 
                            wire:click="restore({{ $trashedSiswa->id }})">
                        <i class="fas fa-undo"></i> Restore
                        </button>
                    
                        <button class="rounded-sm p-1 m-0 bg-red-500 border border-white hover:bg-red-600 hover:text-white hover:border-black" 
                            wire:click="deleteForever({{ $trashedSiswa->id }})">
                        <i class="fas fa-warning"></i> Hapus Selamanya!
                        </button>
                    </td>
                    
                </tr>
            @endforeach
        </tbody>
    </table>
</div>