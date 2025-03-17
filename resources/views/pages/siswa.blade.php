<x-layouts.app>
    <x-slot:navbar>
    @livewire('components.navbar')
    </x-slot>
    <x-slot:modal_riwayat>
    @livewire('tes-modal')
    </x-slot>
    @livewire('siswa.siswa-table')
    @livewire('siswa.siswa-riwayat')
    

</x-layouts.app>