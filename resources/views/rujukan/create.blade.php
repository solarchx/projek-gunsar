@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create Rujukan</h1>

    <form action="{{ route('rujukan.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="field1">Field 1</label>
            <input type="text" class="form-control" id="field1" name="field1" required>
        </div>

        <div class="form-group">
            <label for="field2">Field 2</label>
            <input type="text" class="form-control" id="field2" name="field2" required>
        </div>

        <div class="form-group">
            <label for="field3">Field 3</label>
            <textarea class="form-control" id="field3" name="field3" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
@endsection