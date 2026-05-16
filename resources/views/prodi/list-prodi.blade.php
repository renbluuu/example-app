<x-layout title="List Prodi">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="fw-bold mb-0">List Prodi</h1>

        <a href="/prodi/create" class="btn btn-primary">
            + Add Prodi
        </a>
    </div>

    {{-- Alert Success --}}
    @session('success')
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endsession

    {{-- Table --}}
    <div class="card shadow-sm">
        <div class="card-body">

            <table class="table table-bordered table-hover align-middle mb-0">

                <thead class="table-dark">
                    <tr>
                        <th width="60">No</th>
                        <th>Nama Fakultas</th>
                        <th>Nama Prodi</th>
                        <th>Nama Kaprodi</th>
                        <th>Foto Kaprodi</th>
                        <th width="250">Aksi</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach ($prodi as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->nama_prodi }}</td>
                        <td>{{ $item->nama_kaprodi }}</td>
                        <td>{{ $item->falkutas->name }}</td>
                        <td><img src="{{ asset('storage/'.$item->photo_kaprodi) }}" class="img-thumbnail w-25"></td>
                    </tr>
                        
                    @endforeach

                 

                </tbody>

            </table>

        </div>
    </div>

</x-layout>