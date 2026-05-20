<x-layout title="Detail-Prodi">
    <div>
        <h1>Detail Prodi</h1>
        <table class="table">
            <tbody>
                <tr>
                    <td>Nama Prodi</td>
                    <td>:</td>
                    <td>{{ $prodi->nama_prodi }}</td>
                </tr>
                <tr>
                    <td>Nama Kaprodi</Td>
                    <td>:</Td>
                    <td>{{ $prodi->nama_kaprodi }}</Td>
                </tr>
                <tr>
                    <td>Foto Kaprodi</Td>
                    <td>:</Td>
                    <td>{{ $prodi->photo_kaprodi }}</Td>
                </tr>
            </tbody>
        </table>
    </div>
</x-layout>