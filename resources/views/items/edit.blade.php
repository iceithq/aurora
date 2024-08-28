@extends('layouts.app')

@section('content')
    <h2>Edit item</h2>
    <form method="POST" action="{{ route('items.update', $item->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" value="{{ $item->name }}" class="form-control">
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea name="description" class="form-control">{{ $item->description }}</textarea>
        </div>
        <div class="form-group">
            <label>Price</label>
            <input type="text" name="price" value="{{ $item->price }}" class="form-control">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-outline-primary ">Update item</button>
            or <a href="{{ route('items.index') }}">cancel</a>
        </div>
    </form>
@endsection
