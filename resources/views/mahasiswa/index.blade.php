<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2>Daftar Mahasiswa</h2>
        <hr>
        <a href="{{ URL('mahasiswa/create') }}" class="btn btn-primary mb-3">Create Mahasiswa</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Jurusan</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse($mahasiswa as $data)
                    <tr>
                        <td>{{ $data->id }}</td>
                        <td>{{ $data->nim }}</td>
                        <td>{{ $data->nama }}</td>
                        <td>{{ $data->jurusan }}</td>
                        <td>
                            <a href="{{ URL('mahasiswa/' . $data->id . '/edit') }}"
                                class="btn btn-warning btn-sm">Edit</a>
                            <form onsubmit="return confirm ('Apakah anda yakin?');"
                                action="{{ URL('mahasiswa/' . $data->id) }}" method="POST"
                                style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5">Daftar Mahasiswa Empty</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- Include Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
