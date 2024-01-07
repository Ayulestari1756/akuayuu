<html>
<title>Create prodi</title>

<body>
    <h2>Create prodi</h2>
    <hr>
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <form action ="{{ URL('prodi') }}" method="POST" enctye="multipart/form-data">
        @csrf
        <table>

            <tr>
                <th>Fakultas</th>
                <td>
                    <input type="text" name='fakultas' required>
                </td>
            </tr>

            <tr>
                <th>Prodi</th>
                <td>
                    <input type="text" name='prodi' required>
                </td>
            </tr>
        </table>
        <button type="submit">Save</button>
    </form>
</body>

</html>
