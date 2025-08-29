<!DOCTYPE html>
<html>
<head>
    <title>Edit Obat</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="p-4">
    <h1>Edit Obat</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('obat.update', $obat->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Nama Obat</label>
            <input type="text" name="nama_obat" class="form-control" value="{{ $obat->nama_obat }}">
        </div>

        <div class="mb-3">
            <label>Jenis Obat</label>
            <input type="text" name="jenis_obat" class="form-control" value="{{ $obat->jenis_obat }}">
        </div>

        <div class="mb-3">
            <label>No Obat</label>
            <input type="text" name="no_obat" class="form-control" value="{{ $obat->no_obat }}">
        </div>

        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('obat.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</body>
</html>
