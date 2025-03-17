<x-layouts.app>
    <x-slot:navbar>
    @livewire('components.navbar')
    </x-slot>

    <livewire:siswa.siswa-edit :siswa="$siswa"></livewire:siswa.siswa-edit >
</x-layouts.app>