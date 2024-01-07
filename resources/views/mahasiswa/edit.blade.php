<html>
<title>Edit Mahasiswa</title>

<body>
    <h2>Edit Mahasiswa</h2>
    <hr>
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <form action ="{{ URL('mahasiswa') }}/{{ $mahasiswa->id }}" method="POST" enctye="multipart/form-data">
        @csrf
        @method('PUT')
        <table>

            <tr>
                <th>Nim</th>
                <td>
                    <input type="number" name='nim' value ="{{ $mahasiswa->nim }}"required>
                </td>
            </tr>

            <tr>
                <th>Nama</th>
                <td>
                    <input type="text" name='nama' value ="{{ $mahasiswa->nama }}"required>
                </td>
            </tr>


            <tr>
                <th>jurusan</th>
                <td>
                    <input type="text" name='jurusan' value ="{{ $mahasiswa->jurusan }}"required>
                </td>
            </tr>
        </table>
        <button type="submit">Save</button>
    </form>
</body>

</html>
