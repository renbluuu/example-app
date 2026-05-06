<x-layout>
    <h1>List Falkutas</h1>
    <table class="table">
        <thead>
            <tr>
                <th>NO</th>
                <th>Nama Falkutas</th>
                <th>Nama Dekan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $falkutas as $item )
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->dekan }}</td>
                    <td>
                        <A href="/falkutas/{{ $item->id }}" class="btn btn-dark">Detail</A>
                       <a href="/falkutas/{{ $item->id }}/edit" class="btn btn-warning">Edit</a> 


                        <form action="/falkutas/{{ $item->id }}" method="post">
                            @csrf
                            @method("DELETE")
                        <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


    <ul>
    @foreach ($falkutas as $item)
    <li>
        {{ $item->id }} |
        {{ $item->name }} |
        {{ $item->dekan }}
    </li>
    @endforeach
    </ul>
    <a href="/falkutas/create">Add Falkutas</a>
    <a href="/edit-falkutas">Edit Falkutas</a>
</x-layout>