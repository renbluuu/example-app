<x-layout title="Tambah Fakultas">

    <div class="container mt-4">

        <div class="card shadow-sm">

            {{-- Header --}}
            <div class="card-header d-flex justify-content-between align-items-center">
                <h3 class="mb-0">Tambah Fakultas</h3>
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
                <form action="/falkutas" method="POST">

                    @csrf

                    {{-- Nama Fakultas --}}
                    <div class="mb-3">

                        <label class="form-label">
                            Nama Fakultas
                        </label>

                        <input 
                            type="text"
                            name="name_falkutas"
                            class="form-control"
                            value="{{ old('name_falkutas') }}"
                            placeholder="Masukkan nama fakultas"
                        >

                    </div>

                    {{-- Nama Dekan --}}
                    <div class="mb-3">

                        <label class="form-label">
                            Nama Dekan
                        </label>

                        <input 
                            type="text"
                            name="name_dekan"
                            class="form-control"
                            value="{{ old('name_dekan') }}"
                            placeholder="Masukkan nama dekan"
                        >

                    </div>

                    {{-- Tombol --}}
                    <div class="d-flex gap-2">

                        <button 
                            type="submit" 
                            class="btn btn-primary"
                        >
                            Simpan
                        </button>

                        <a href="/falkutas" class="btn btn-secondary">
                            Kembali
                        </a>

                    </div>

                </form>

            </div>

        </div>

    </div>

</x-layout>