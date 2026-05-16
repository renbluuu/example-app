<x-layout title="List Fakultas">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="fw-bold mb-0">List Fakultas</h1>

        <a href="/falkutas/create" class="btn btn-primary">
            + Add Fakultas
        </a>
    </div>



    {{-- Table --}}
    <div class="card shadow-sm">
        <div class="card-body">

            <table class="table table-bordered table-hover align-middle mb-0">

                <thead class="table-dark">
                    <tr>
                        <th width="60">No</th>
                        <th>Nama Fakultas</th>
                        <th>Nama Dekan</th>
                        <th width="250">Aksi</th>
                    </tr>
                </thead>

                <tbody>

                    @forelse ($falkutas as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>

                            <td>{{ $item->name }}</td>

                            <td>{{ $item->dekan }}</td>

                            <td>
                                <div class="d-flex gap-2">

                                    <a
                                        href="/falkutas/{{ $item->id }}"
                                        class="btn btn-dark btn-sm"
                                    >
                                        Detail
                                    </a>

                                    <a
                                        href="/falkutas/{{ $item->id }}/edit"
                                        class="btn btn-warning btn-sm"
                                    >
                                        Edit
                                    </a>

                                    <form
                                        action="/falkutas/{{ $item->id }}"
                                        method="POST"
                                        onsubmit="return confirm('Yakin ingin menghapus data ini?')"
                                    >
                                        @csrf
                                        @method('DELETE')

                                        <button
                                            type="submit"
                                            class="btn btn-danger btn-sm"
                                        >
                                            Hapus
                                        </button>
                                    </form>

                                </div>
                            </td>
                        </tr>

                    @empty
                        <tr>
                            <td colspan="4" class="text-center text-muted">
                                Data fakultas belum tersedia.
                            </td>
                        </tr>
                    @endforelse

                </tbody>

            </table>

        </div>
    </div>

</x-layout>