<div class="flex flex-col p-10 pb-5">
    <div class="pt-1 pl-2 bg-gray-300 border border-gray-400 rounded-t-sm">
        <label>Search:</label>
        <input wire:model.live="search" class="appearance-none w-1/4 bg-white text-gray-700 border border-gray-200 ml-1 rounded py-1 mb-1 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
        placeholder="Cari Nama"/>
    </div>
    <table class="w-full bg-white text-sm shadow-md">
        <thead class="bg-gray-500">
            <tr>
                <th class="font-[600] p-3 pb-1 pt-1 text-slate-100  text-center border border-gray-700">NISN</th>
                <th class="font-[600] p-3 pb-1 pt-1 text-slate-100  text-center border border-gray-700">NIS</th>
                <th class="font-[600] p-3 pb-1 pt-1 text-slate-100  text-center border border-gray-700">Nama Siswa</th>
                <th class="font-[600] p-3 pb-1 pt-1 text-slate-100  text-center border border-gray-700">Nama Ayah</th>
                <th class="font-[600] p-3 pb-1 pt-1 text-slate-100  text-center border border-gray-700">Nama Ibu</th>
                <th class="font-[600] p-3 pb-1 pt-1 text-slate-100  text-center border border-gray-700">No Telp Ayah</th>
                <th class="font-[600] p-3 pb-1 pt-1 text-slate-100  text-center border border-gray-700">No Telp Ibu</th>
                <th class="font-[600] p-3 pb-1 pt-1 text-slate-100  text-center border border-gray-700">Bulan</th>
                <th class="font-[600] p-3 pb-1 pt-1 text-slate-100  text-center border border-gray-700">Status Bayar</th>
                <th class="font-[600] p-3 pb-1 pt-1 text-slate-100  text-center border border-gray-700">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($datas as $data)
            <tr wire:key="{{ $data->id }}">
                <td class="w-[3%] p-3 pt-1 pb-1 text-black font-[600] border border-gray-400">{{ $data->siswa->nisn }}</td>
                <td class="w-[3%] p-3 pt-1 pb-1 text-black font-[600] border border-gray-400">{{ $data->siswa->nis }}</td>
                <td class="w-[18%] p-3 pt-1 pb-1 text-black font-[600] border border-gray-400">{{ $data->siswa->nama }}</td>
                <td class="p-3 pt-1 pb-1 text-black font-[600] border border-gray-400">{{ $data->siswa->ayah }}</td>
                <td class="p-3 pt-1 pb-1 text-black font-[600] border border-gray-400">{{ $data->siswa->ibu }}</td>
                <td class="p-3 pt-1 pb-1 text-black font-[600] border border-gray-400">{{ $data->siswa->no_telp_ayah }}</td>
                <td class="p-3 pt-1 pb-1 text-black font-[600] border border-gray-400">{{ $data->siswa->no_telp_ibu }}</td>
                <td class="p-3 pt-1 pb-1 text-black font-[600] border border-gray-400">{{ $data->bulan}}</td>
                <td class="p-3 pt-1 pb-1 text-gray-200 font-[600] border border-gray-400 bg-red-500">{{ $data->status_bayar}}</td>
                {{-- <td><button wire:click="$dispatch('ubah', { id: {{ $data->id }} })">Lunas</button></td> --}}
                <td class="p-1 pt-1 pb-1 text-black font-[500] border border-gray-400 text-center" >
                    <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-3 rounded-xl" wire:click="submitBayar({{ $data->id }})"><a>Lunas</a></button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="p-2 pt-1 pb-1 text-white">
        {{ $datas->links() }}
    </div>

</div>
