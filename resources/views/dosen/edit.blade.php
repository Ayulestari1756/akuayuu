<html>
<title>Edit Dosen</title>

<body>
    <h2>Edit Dosen</h2>
    <hr>
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        ;
    @endif
    <form action ="{{ URL('dosen') }}/{{ $dosen->id }}" method="POST" enctye="multipart/form-data">
        @csrf
        @method('PUT')
        <table>

            <tr>
                <th>NIP</th>
                <td>
                    <input type="number" name='nip' value ="{{ $dosen->nip }}"required>
                </td>
            </tr>

            <tr>
                <th>Nama</th>
                <td>
                    <input type="text" name='nama' value ="{{ $dosen->nama }}"required>
                </td>
            </tr>


            <tr>
                <th>Telepon</th>
                <td>
                    <input type="number" name='telepon' value ="{{ $dosen->telepon }}"required>
                </td>
            </tr>
        </table>
        <button type="submit">Save</button>
    </form>
</body>

</html>
