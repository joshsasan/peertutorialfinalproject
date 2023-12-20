@extends('base')

@section('content')
    <h1>Edit Guitar List</h1>
    @if(session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif
<style>
    h1{
        color: white;
    }
label{
    color: white;
}

</style>

<form action="{{ route('guitar.update', ['guitar' => $guitar->id]) }}" method="POST">
    @csrf

        <div class="mb-3">
            <label for="brand" class="form-label">Brand:</label>
            <input type="text" name="brand" class="form-control" value="{{ old('brand', $guitar->brand) }}" required>
        </div>

        <div class="mb-3">
            <label for="model" class="form-label">Model:</label>
            <input type="text" name="model" class="form-control" value="{{ old('model', $guitar->model) }}" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description:</label>
            <textarea name="description" class="form-control" required>{{ old('description', $guitar->description) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price:</label>
            <input type="number" name="price" class="form-control" value="{{ old('price', $guitar->price) }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update Guitar</button>
    </form>
@endsection
