<html>
<title>Create Matakuliah</title>

<body>
    <h2>Create Matakuliah</h2>
    <hr>
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <form action ="{{ URL('matkul') }}" method="POST" enctye="multipart/form-data">
        @csrf
        <table>

            <tr>
                <th>Kode Matkul</th>
                <td>
                    <input type="number" name='kode_mk' required>
                </td>
            </tr>

            <tr>
                <th>Nama matkul</th>
                <td>
                    <input type="text" name='nama_mk' required>
                </td>
            </tr>


            <tr>
                <th>SKS</th>
                <td>
                    <input type="number" name='sks' required>
                </td>
            </tr>
        </table>
        <button type="submit">Save</button>
    </form>
</body>

</html>
