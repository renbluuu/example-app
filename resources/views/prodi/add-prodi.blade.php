<x-layout title="Tambah Prodi">

    <div class="container mt-4">
        <div class="card shadow-sm">
            
            <div class="card-header">
                <h3 class="mb-0">Tambah Prodi</h3>
            </div>

            <div class="card-body">
                <form action="/prodi/store" method="POST" enctype="multipart/form-data">
                    @csrf

                    {{-- Pilih Fakultas --}}
                    <div class="mb-3">
                        <label for="falkutas_id" class="form-label">
                            Fakultas
                        </label>

                        <select 
                            name="falkutas_id" 
                            id="falkutas_id"
                            class="form-select"
                            required
                        >
                            <option value="">-- Pilih Fakultas --</option>

                            @foreach ($falkutas as $item)
                                <option value="{{ $item->id }}">
                                    {{ $item->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    {{-- Nama Prodi --}}
                    <div class="mb-3">
                        <label for="nama_prodi" class="form-label">
                            Nama Prodi
                        </label>

                        <input 
                            type="text"
                            name="nama_prodi"
                            id="nama_prodi"
                            class="form-control"
                            placeholder="Masukkan nama prodi"
                            required
                        >
                    </div>

                    {{-- Nama Kaprodi --}}
                    <div class="mb-3">
                        <label for="nama_kaprodi" class="form-label">
                            Nama Kaprodi
                        </label>

                        <input 
                            type="text"
                            name="nama_kaprodi"
                            id="nama_kaprodi"
                            class="form-control"
                            placeholder="Masukkan nama kaprodi"
                            required
                        >
                    </div>

                    {{-- Upload Foto --}}
                    <div class="mb-3">
                        <label for="photo_kaprodi" class="form-label">
                            Foto Kaprodi
                        </label>

                        <input 
                            type="file"
                            name="photo_kaprodi"
                            id="photo_kaprodi"
                            class="form-control"
                            accept=".jpg,.jpeg,.png"
                        >
                    </div>

                    {{-- Tombol --}}
                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-primary">
                            Simpan
                        </button>

                        <a href="/prodi" class="btn btn-secondary">
                            Kembali
                        </a>
                    </div>

                </form>
            </div>

        </div>
    </div>

</x-layout>