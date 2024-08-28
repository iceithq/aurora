@extends('layouts.app')

@section('content')
    <h2>Create item</h2>
    <form method="POST" action="{{ route('items.store') }}">
        @csrf
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea name="description" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label>Price</label>
            <input type="text" name="price" class="form-control">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-outline-primary ">Save item</button>
            or <a href="{{ route('items.index') }}">cancel</a>
        </div>
    </form>
@endsection
