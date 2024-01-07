<html>
<title>Create Dosen</title>

<body>
    <h2>Create Dosen</h2>
    <hr>
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <form action ="{{ URL('dosen') }}" method="POST" enctye="multipart/form-data">
        @csrf
        <table>

            <tr>
                <th>NIP</th>
                <td>
                    <input type="number" name='nip' required>
                </td>
            </tr>

            <tr>
                <th>Nama</th>
                <td>
                    <input type="text" name='nama' required>
                </td>
            </tr>


            <tr>
                <th>Telepon</th>
                <td>
                    <input type="number" name='telepon' required>
                </td>
            </tr>
        </table>
        <button type="submit">Save</button>
    </form>
</body>

</html>
