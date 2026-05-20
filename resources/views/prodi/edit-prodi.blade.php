<x-layout title="Edit Prodi">

    <div class="container mt-4">

        <div class="card shadow-sm">

            <div class="card-header">
                <h3 class="mb-0">Edit Prodi</h3>
            </div>

            <div class="card-body">

                {{-- Error Validation --}}
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                {{-- Form --}}
                <form 
                    action="/prodi/{{ $prodi->id }}" 
                    method="POST"
                    enctype="multipart/form-data"
                >

                    @csrf
                    @method('PUT')

                    {{-- Nama Prodi --}}
                    <div class="mb-3">
                        <label class="form-label">
                            Nama Prodi
                        </label>

                        <input 
                            type="text"
                            name="nama_prodi"
                            value="{{ old('nama_prodi', $prodi->nama_prodi) }}"
                            class="form-control"
                            placeholder="Masukkan nama prodi"
                        >
                    </div>

                    {{-- Nama Kaprodi --}}
                    <div class="mb-3">
                        <label class="form-label">
                            Nama Kaprodi
                        </label>

                        <input 
                            type="text"
                            name="nama_kaprodi"
                            value="{{ old('nama_kaprodi', $prodi->nama_kaprodi) }}"
                            class="form-control"
                            placeholder="Masukkan nama kaprodi"
                        >
                    </div>

                    {{-- Foto Lama --}}
                    <div class="mb-3">

                        <label class="form-label">
                            Foto Lama
                        </label>

                        <br>

                        @if ($prodi->photo_kaprodi)
                            <img 
                                src="{{ asset('storage/' . $prodi->photo_kaprodi) }}"
                                width="120"
                                class="img-thumbnail"
                            >
                         {{-- Checkbox Hapus Foto --}}
                            <div class="form-check">

                                <input 
                                    class="form-check-input"
                                    type="checkbox"
                                    name="hapus_foto"
                                    value="1"
                                    id="hapus_foto"
                                >

                                <label 
                                    class="form-check-label"
                                    for="hapus_foto"
                                >
                                    Hapus foto lama
                                </label>

                            </div>

                        @else
                            <p class="text-muted">
                                Belum ada foto
                            </p>
                        @endif

                    </div>

                    {{-- Upload Foto Baru --}}
                    <div class="mb-3">

                        <label class="form-label">
                            Upload Foto Baru
                        </label>

                        <input 
                            type="file"
                            name="photo_kaprodi"
                            class="form-control"
                            accept=".jpg,.jpeg,.png,.jfif"
                        >

                    </div>

                    {{-- Button --}}
                    <div class="d-flex gap-2">

                        <button 
                            type="submit" 
                            class="btn btn-warning"
                        >
                            Update
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