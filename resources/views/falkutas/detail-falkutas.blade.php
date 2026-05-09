<x-layout title="Detail-Falkutas">
    <div>
        <h1>Detail Falkutas</h1>
        <table class="table">
            <tbody>
                <tr>
                    <td>Nama Falkutas</td>
                    <td>:</td>
                    <td>{{ $falkuta->name }}</td>
                </tr>
                <tr>
                    <td>Nama Dekan</Td>
                    <td>:</Td>
                    <td>{{ $falkuta->dekan }}</Td>
                </tr>
            </tbody>
        </table>
    </div>
</x-layout>