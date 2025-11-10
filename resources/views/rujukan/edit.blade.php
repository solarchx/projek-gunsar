@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Rujukan</h1>

    <form action="{{ route('rujukan.update', $rujukan->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="field1">Field 1</label>
            <input type="text" class="form-control" id="field1" name="field1" value="{{ old('field1', $rujukan->field1) }}" required>
            @error('field1')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="field2">Field 2</label>
            <input type="text" class="form-control" id="field2" name="field2" value="{{ old('field2', $rujukan->field2) }}" required>
            @error('field2')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Add more fields as necessary -->

        <button type="submit" class="btn btn-primary">Update Rujukan</button>
        <a href="{{ route('rujukan.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection