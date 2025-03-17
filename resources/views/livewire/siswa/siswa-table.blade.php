<div class="flex flex-col p-10 pb-5">

    <div class="mb-2">
        <button onclick="toggleForm()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold p-2 rounded">
            Tambah Siswa
        </button>

        <div id="formContainer" class="hidden">
            <form class="mt-2 w-full" wire:submit.prevent="save">
                <div>Data Siswa
                <div class="flex flex-wrap -mx-3 mb-4 ">
        
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <label class="block  tracking-wide text-gray-700 text-sm font-bold mb-1">
                            NIS
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            type="text" wire:model="nis" placeholder="Ketik NIS">
                    </div>

                    <div class="w-full md:w-1/3 px-3">
                        <label class="block  tracking-wide text-gray-700 text-sm font-bold mb-1">
                            NISN
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            type="text" wire:model="nisn" placeholder="Ketik NISN">
                    </div>

                    <div class="w-full md:w-1/3 px-3">
                        <label class="block  tracking-wide text-gray-700 text-sm font-bold mb-1">
                            Jenis Kelamin
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            type="text" wire:model="jenis_kelamin" placeholder="Ketik Jenis Kelamin">
                    </div>
                        
                </div>
                <div class="flex flex-wrap -mx-3 mb-4">
                    <div class="w-full md:w-1/2 px-3">
                        <label class="block  tracking-wide text-gray-700 text-sm font-bold mb-1">
                            Nama Siswa
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            type="text" wire:model="nama" placeholder="Ketik Nama Siswa">
                    </div>

                    <div class="w-full md:w-1/2 px-3">
                        <label class="block  tracking-wide text-gray-700 text-sm font-bold mb-1">
                            Agama
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            type="text" wire:model="agama" placeholder="Ketik Agama">
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-4">
                    <div class="w-full md:w-full px-3">
                        <label class="block  tracking-wide text-gray-700 text-sm font-bold mb-1">
                            Keterangan
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            type="text" wire:model="keterangan" placeholder="Ketik Keterangan">
                    </div>
                </div>
                </div>

                <div>Data Orang Tua / Wali
                <div class="flex flex-wrap -mx-3 mb-4">
                    
                    <div class="w-full md:w-1/2 px-3">
                        <label class="block  tracking-wide text-gray-700 text-sm font-bold mb-1">
                            Nama Ayah
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            type="text" wire:model="ayah" placeholder="Ketik Nama Ayah">
                    </div>

                    <div class="w-full md:w-1/2 px-3">
                        <label class="block  tracking-wide text-gray-700 text-sm font-bold mb-1">
                            Nomor Telepon Ayah
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            type="text" wire:model="no_telp_ayah" placeholder="Ketik Nomor Telepon Ayah">
                    </div>
                </div>

                <div class="flex flex-wrap -mx-3 mb-6">
                    
                    <div class="w-full md:w-1/2 px-3">
                        <label class="block  tracking-wide text-gray-700 text-sm font-bold mb-1">
                            Nama Ibu
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            type="text" wire:model="ibu" placeholder="Ketik Nama Ibu">
                    </div>

                    <div class="w-full md:w-1/2 px-3">
                        <label class="block  tracking-wide text-gray-700 text-sm font-bold mb-1">
                            Nomor Telepon Ibu
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            type="text" wire:model="no_telp_ibu" placeholder="Ketik Nomor Telepon Ibu">
                    </div>
                </div>

                </div>
                

                <button type="submit"
                    class="bg-green-500 hover:bg-green-700 text-white font-bold px-2 rounded">Save</button>
            </form>
        </div>
    </div>

    <div class="pt-1 pl-2 bg-gray-300 border border-gray-400 rounded-t-sm">
        <label>Search:</label>
        <input wire:model.live="search" class="appearance-none w-1/4 bg-white text-gray-700 border border-gray-200 ml-1 rounded py-1 mb-1 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
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
                    Nominal Spp/Bulan
                </th>
                <th class="font-[600] p-3 pb-1 pt-1 text-slate-100  text-center border border-gray-700">
                    Aksi
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($siswas as $siswa)
                <tr wire:key="{{ $siswa->id }}">
                    <td class="p-3 pt-1 pb-1 text-black font-[600] border border-gray-400">{{ $siswa->nis }}</td>
                    <td class="p-3 pt-1 pb-1 text-black font-[500] border border-gray-400">{{ $siswa->nisn }}</td>
                    <td class="p-3 pt-1 pb-1 text-black font-[500] border border-gray-400">{{ $siswa->nama }}</td>
                    @if($siswa->jenis_kelamin == 'L')
                    <td class="w-[8%] p-3 pt-1 pb-1 text-black font-[500] border border-gray-400">Laki-Laki</td>
                    @else
                    <td class="w-[8%] p-3 pt-1 pb-1 text-black font-[500] border border-gray-400">Perempuan</td>
                    @endif
                    <td class="w-[10%] text-center p-3 pt-1 pb-1 text-black font-[700] border border-gray-400">
                        {{ $siswa->nominal_per_bulan }}
                    </td>
                    <td class="w-[18%] p-3 pt-1 pb-1 text-black font-[500] border border-gray-400">
                        <button class="rounded-sm p-1 m-0 bg-blue-400 border border-white hover:bg-blue-500 hover:text-white hover:border-black" 
                            wire:click="$dispatch('id-siswa', { id: {{ $siswa->id }} })">
                        <i class="fas fa-info-circle"></i> Riwayat Bayar
                        </button>

                        <button class="rounded-sm p-1 m-0 bg-red-400 border border-white hover:bg-red-500 hover:text-white hover:border-black"
                            wire:click="delete({{ $siswa->id }})">
                        <i class="fas fa-trash"></i> Delete
                        </button>
                        
                        <form class="inline" method="post" action="{{ route('editSiswa') }}">
                            @csrf
                            <button class="rounded-sm p-1 m-0 bg-orange-400 border border-white hover:bg-orange-500 hover:text-white hover:border-black" 
                            name="siswa_id" value="{{ $siswa->id }}" type="submit">
                            <i class="fas fa-edit"></i> Edit
                            </button>
                        </form>
                    </td>
                    
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="p-2 pt-1 pb-1 bg-gray-300 border border-gray-400 rounded-b-sm">
        {{ $siswas->links() }}
    </div>

    <script>
        function toggleForm() {
            let form = document.getElementById('formContainer');
            form.classList.toggle('hidden');
        }
    </script>

</div>
