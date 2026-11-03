<x-app>

    <x-slot:title>
        {{ $title }}
    </x-slot>
        @if (session("success"))
            <div class="alert alert-success" role="alert">
                 {{ session("success") }}
            </div>
         @endif

    <a class="btn btn-primary my-2 py-2" href="{{ route('apotek.create') }}">Tambah Data Apotek</a>

    <table class="table table-bordered border-dark table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama_Obat</th>
                <th>Kategori</th>
                <th>Stok</th>
                <th>Harga</th>
                <th>Tanggal_Expired</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($apoteks as $apotek)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $apotek->nama_obat }}</td>
                    <td>{{ $apotek->kategori }}</td>
                    <td>{{ $apotek->stok }}</td>
                    <td>Rp. {{ $apotek->harga }}</td>
                    <td>{{ $apotek->tanggal_expired }}</td>
                    <td>
                        <a class="btn btn-warning btn-sm" href="{{ route('apotek.edit', $apotek->id) }}">Edit</a>
                        <a class="btn btn-info btn-sm" href="{{ route('apotek.show', $apotek->id) }}">Show</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</x-app>
