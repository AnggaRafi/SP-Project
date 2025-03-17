<div>
    <x-modal name="riwayat-bayar" title="Riwayat Bayar">
        <x-slot:body>
            <table class="w-full bg-white text-sm shadow-md ">
                <thead class="bg-gray-500 ">
                    <tr>
                        <th class="font-[600] p-3 pb-1 pt-1 text-slate-100  text-center border border-gray-700">
                            Bulan
                        </th>
                        <th class="font-[600] p-3 pb-1 pt-1 text-slate-100  text-center border border-gray-700">
                            Nominal Seharusnya
                        </th>
                        <th class="font-[600] p-3 pb-1 pt-1 text-slate-100  text-center border border-gray-700">
                            Nominal yang Dibayar
                        </th>
                        <th class="font-[600] p-3 pb-1 pt-1 text-slate-100  text-center border border-gray-700">
                            Status Bayar
                        </th>
                        <th class="font-[600] p-3 pb-1 pt-1 text-slate-100  text-center border border-gray-700">
                            Bukti
                        </th>
                        <th class="font-[600] p-3 pb-1 pt-1 text-slate-100  text-center border border-gray-700">
                            Keterangan
                        </th>
                        <th class="font-[600] p-3 pb-1 pt-1 text-slate-100  text-center border border-gray-700">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dodo as $dodos)
                    <tr wire:key="{{ $dodos->id }}">
                        <td class="p-3 pt-1 pb-1 text-black font-[600] border border-gray-400"  >{{ $dodos->bulan }}</td>
                        <td class="p-3 pt-1 pb-1 text-black font-[500] border border-gray-400" >{{ $dodos->nominal_byr }}</td>
                        <td class="p-3 pt-1 pb-1 text-black font-[500] border border-gray-400" >{{ $dodos->nominal_asli }}</td>
                        <td class="p-3 pt-1 pb-1 text-black font-[500] border border-gray-400
                            {{ $dodos->status_bayar == 'Belum Lunas' ? 'bg-red-400' : 'bg-green-400' }}">
                            {{ $dodos->status_bayar }}</td>
                        <td class="p-3 pt-1 pb-1 text-black font-[500] border border-gray-400" >{{ $dodos->bukti }}</td>
                        <td class="p-3 pt-1 pb-1 text-black font-[500] border border-gray-400" >{{ $dodos->keterangan }}</td>
                        <td class="p-1 pt-1 pb-1 text-black font-[500] border border-gray-400 text-center" >
                            <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-3 rounded-xl" wire:click="batalBayar({{ $dodos->id }})"><a>Batal Lunas</a></button>
                            <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-3 rounded-xl" wire:click="submitBayar({{ $dodos->id }})"><a>Lunas</a></button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </x-slot:body>
    </x-modal>
</div>

