<x-app>

    <x-slot:title>
        {{ $title }}
    </x-slot:title>

    <a class="btn btn-primary my-2 py-2" href="{{ route('apotek.index') }}">Kembali</a>

    <form method="POST" action="{{ route('apotek.update', $apotek->id) }}">
        @csrf
        @method('put')

        <div class="mb-3">
            <label for="nama_obat" class="form-label">Nama Obat</label>
            <input type="text" class="form-control @error('nama_obat') is-invalid @enderror" id="nama_obat"
                name="nama_obat" value="{{ old('nama_obat', $apotek->nama_obat) }}">
            @error('nama_obat')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="kategori" class="form-label">Kategori</label>
            <select class="form-select @error('kategori') is-invalid @enderror" id="kategori" name="kategori">
                <option value="">-- Pilih Kategori --</option>
                @foreach (['Tablet', 'Kapsul', 'Sirup', 'Salep', 'Vitamin'] as $kat)
                    <option value="{{ $kat }}" @selected(old('kategori', $apotek->kategori) === $kat)>{{ $kat }}</option>
                @endforeach
            </select>
            @error('kategori')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="stok" class="form-label">Stok</label>
            <input type="number" class="form-control @error('stok') is-invalid @enderror" id="stok"
                name="stok" value="{{ old('stok', $apotek->stok) }}">
            @error('stok')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="number" class="form-control @error('harga') is-invalid @enderror" id="harga"
                name="harga" value="{{ old('harga', $apotek->harga) }}">
            @error('harga')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="tanggal_expired" class="form-label">Tanggal Expired</label>
            <input type="date" class="form-control @error('tanggal_expired') is-invalid @enderror"
                id="tanggal_expired" name="tanggal_expired"
                value="{{ old('tanggal_expired', $apotek->tanggal_expired) }}">
            @error('tanggal_expired')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>

</x-app>