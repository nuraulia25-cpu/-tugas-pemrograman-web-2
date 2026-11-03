<x-app>

    <x-slot:title>
        {{ $title }}
    </x-slot:title>

    <a class="btn btn-primary my-2 py-2" href="{{ route('apotek.index') }}">Kembali</a>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Apotek</h5>
            <p class="card-text"><strong>Nama Obat:</strong> {{ $apotek->nama_obat }}</p>
            <p class="card-text"><strong>Kategori:</strong> {{ $apotek->kategori }}</p>
            <p class="card-text"><strong>Stok:</strong> {{ $apotek->stok }}</p>
            <p class="card-text"><strong>Harga:</strong> {{ $apotek->harga }}</p>
            <p class="card-text"><strong>Tanggal Expired:</strong> {{ $apotek->tanggal_expired }}</p>
        </div>
    </div>

</x-app>
