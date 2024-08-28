@extends('layouts.app')

@section('content')
    <h2>{{ $item->name }}</h2>

    <p>
        Description: {{ $item->description }}
    </p>

    <p>
        Price: {{ $item->price }}
    </p>
    <p>
        <a href="{{ route('items.edit', $item->id) }}">Edit</a>
        <a href="{{ route('items.index') }}">Go Back</a>
    </p>
    <p>
    <form method="POST" action="{{ route('items.destroy', $item->id) }}">
        @csrf
        @method('DELETE')
        <button class="btn btn-outline-danger">Delete</button>
    </form>
    </p>
@endsection
