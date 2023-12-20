@extends('base')

@section('content')
    <h1>Add new Keyboard</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <style>
        label{
            color: white;
        }
        h1{
            color: white;
        }
    </style>
    <form action="{{url('keyboard/create')}}" method="POST">
                @csrf

        <div class="mb-3">
            <label for="brand" class="form-label">Brand:</label>
            <input type="text" name="brand" class="form-control" value="{{ old('brand') }}" required>
        </div>

        <div class="mb-3">
            <label for="model" class="form-label">Model:</label>
            <input type="text" name="model" class="form-control" value="{{ old('model') }}" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description:</label>
            <textarea name="description" class="form-control" required>{{ old('description') }}</textarea>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price:</label>
            <input type="number" name="price" class="form-control" value="{{ old('price') }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Add a new keyboard</button>
    </form>
@endsection
