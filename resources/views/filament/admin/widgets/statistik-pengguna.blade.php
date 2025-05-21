<div class="grid grid-cols-3 gap-4">
    <x-filament::card>
        <h3>Total Pengguna</h3>
        <p>{{ $totalUsers }}</p>
    </x-filament::card>
    <x-filament::card>
        <h3>Dokter</h3>
        <p>{{ $totalDokter }}</p>
    </x-filament::card>
    <x-filament::card>
        <h3>Pasien</h3>
        <p>{{ $totalPasien }}</p>
    </x-filament::card>
</div>