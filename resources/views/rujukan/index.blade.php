@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Rujukan</h1>
    <a href="{{ route('rujukan.create') }}" class="btn btn-primary mb-3">Tambah Rujukan</a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Tanggal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($rujukans as $rujukan)
                <tr>
                    <td>{{ $rujukan->id }}</td>
                    <td>{{ $rujukan->nama }}</td>
                    <td>{{ $rujukan->created_at->format('d-m-Y') }}</td>
                    <td>
                        <a href="{{ route('rujukan.show', $rujukan) }}" class="btn btn-info">Lihat</a>
                        <a href="{{ route('rujukan.edit', $rujukan) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('rujukan.destroy', $rujukan) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $rujukans->links() }}
</div>
@endsection