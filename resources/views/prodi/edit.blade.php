<html>
<title>Edit Prodi</title>

<body>
    <h2>Edit Prodi</h2>
    <hr>
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        ;
    @endif
    <form action ="{{ URL('prodi') }}/{{ $prodi->id }}" method="POST" enctye="multipart/form-data">
        @csrf
        @method('PUT')
        <table>

            <tr>
                <th>Fakultas</th>
                <td>
                    <input type="text" name='fakultas' value ="{{ $prodi->fakultas }}"required>
                </td>
            </tr>

            <tr>
                <th>Prodi</th>
                <td>
                    <input type="text" name='prodi' value ="{{ $prodi->prodi }}"required>
                </td>
            </tr>
        </table>
        <button type="submit">Save</button>
    </form>
</body>

</html>
