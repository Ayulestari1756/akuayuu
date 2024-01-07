<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Prodi</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2>Daftar Prodi</h2>
        <hr>
        <a href="{{ URL('prodi/create') }}" class="btn btn-primary mb-3">Create prodi</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>fakultas</th>
                    <th>Prodi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($prodi as $data)
                    <tr>
                        <td>{{ $data->id }}</td>
                        <td>{{ $data->fakultas }}</td>
                        <td>{{ $data->prodi }}</td>
                        <td>
                            <a href="{{ URL('prodi/' . $data->id . '/edit') }}" class="btn btn-warning btn-sm">Edit</a>
                            <form onsubmit="return confirm ('Apakah anda yakin?');"
                                action="{{ URL('prodi/' . $data->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5">Daftar Prodi Empty</td>
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
