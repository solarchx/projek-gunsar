@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Rujukan</h1>
    <div class="card">
        <div class="card-header">
            Rujukan #{{ $rujukan->id }}
        </div>
        <div class="card-body">
            <p><strong>Field 1:</strong> {{ $rujukan->field1 }}</p>
            <p><strong>Field 2:</strong> {{ $rujukan->field2 }}</p>
            <p><strong>Field 3:</strong> {{ $rujukan->field3 }}</p>
            <!-- Add more fields as necessary -->
        </div>
        <div class="card-footer">
            <a href="{{ route('rujukan.edit', $rujukan->id) }}" class="btn btn-primary">Edit</a>
            <form action="{{ route('rujukan.destroy', $rujukan->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            <a href="{{ route('rujukan.pdf', $rujukan->id) }}" class="btn btn-secondary">Download PDF</a>
        </div>
    </div>
</div>
@endsection