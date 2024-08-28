@extends('layouts.app')

@section('content')
    <h2>Items</h2>
    <p>
        <a href="{{ route('items.create') }}" class="btn btn-outline-primary ">Create item</a>
    </p>
    <table class="table table-hover">
        <thead>
            <th>Item</th>
            <th>Price</th>
            <th></th>
            <th></th>
        </thead>
        <tbody>
            @foreach ($items as $item)
                <tr>
                    <td>
                        <a href="{{ route('items.show', $item->id) }}">
                            {{ $item->name }}
                        </a><br>
                        {{ $item->description }}
                    </td>
                    <td>{{ $item->price }}</td>
                    <td>
                        <a href="{{ route('items.edit', $item->id) }}">Edit</a>
                    </td>
                    <td>
                        <form method="POST" action="{{ route('items.destroy', $item->id) }}">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-outline-danger ">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
