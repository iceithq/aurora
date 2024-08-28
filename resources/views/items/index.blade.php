@extends('layouts.app')

@section('content')
    <h2>Items</h2>
    <p>
        <a href="{{ route('items.create') }}" class="btn btn-outline-primary ">Create item</a>
    </p>
    <table class="table table-hover">
        <thead>
            <th>Item</th>
            <th>Description</th>
            <th>Price</th>
            <th></th>
        </thead>
        <tbody>
            @foreach ($items as $item)
                <tr>
                    <td>
                        <a href="{{ route('items.show', $item->id) }}">
                            {{ $item->name }}
                        </a>
                    </td>
                    <td>{{ $item->description }}</td>
                    <td>{{ $item->price }}</td>
                    <td nowrap>
                        <a href="{{ route('items.edit', $item->id) }}">Edit</a>
                        <form method="POST" action="{{ route('items.destroy', $item->id) }}">
                            @csrf
                            @method('DELETE')
                            <button>Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
