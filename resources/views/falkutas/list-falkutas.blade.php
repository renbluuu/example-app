<x-layout>
    <h1>List Falkutas</h1>

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