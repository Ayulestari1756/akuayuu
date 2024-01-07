<html>
<title>Create Mahasiswa</title>

<body>
    <h2>Create Mahasiswa</h2>
    <hr>
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <form action ="{{ URL('mahasiswa') }}" method="POST" enctye="multipart/form-data">
        @csrf
        <table>

            <tr>
                <th>NIM</th>
                <td>
                    <input type="number" name='nim' required>
                </td>
            </tr>

            <tr>
                <th>Nama</th>
                <td>
                    <input type="text" name='nama' required>
                </td>
            </tr>


            <tr>
                <th>Jurusan</th>
                <td>
                    <input type="text" name='jurusan' required>
                </td>
            </tr>
        </table>
        <button type="submit">Save</button>
    </form>
</body>

</html>
