<div class="flex flex-col p-10 pb-5">
    <div id="formContainer">
        <form class="mt-2 w-full" wire:submit="editSiswa({{ $siswa->id }})">
            <div>Data Siswa
            <div class="flex flex-wrap -mx-3 mb-4 ">
                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                    <label class="block  tracking-wide text-gray-700 text-sm font-bold mb-1">
                        NIS
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        type="text" wire:model="nis" placeholder="Ketik NIS" >
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
                    <label class="block tracking-wide text-gray-700 text-sm font-bold mb-1">
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