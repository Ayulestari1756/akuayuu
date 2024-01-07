<html>
<title>Edit Mata Kuliah</title>

<body>
    <h2>Edit Mata kuliah</h2>
    <hr>
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        ;
    @endif
    <form action ="{{ URL('matkul') }}/{{ $matkul->id }}" method="POST" enctye="multipart/form-data">
        @csrf
        @method('PUT')
        <table>

            <tr>
                <th>Kode Matkul</th>
                <td>
                    <input type="number" name='kode_mk' value ="{{ $matkul->kode_mk }}"required>
                </td>
            </tr>

            <tr>
                <th>Nama Matkul</th>
                <td>
                    <input type="text" name='nama_mk' value ="{{ $matkul->nama_mk }}"required>
                </td>
            </tr>


            <tr>
                <th>SKS</th>
                <td>
                    <input type="number" name='sks' value ="{{ $matkul->sks }}"required>
                </td>
            </tr>
        </table>
        <button type="submit">Save</button>
    </form>
</body>

</html>
