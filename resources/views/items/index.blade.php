<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Items') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p>
                        <a href="{{ route('items.create') }}" class="btn btn-outline-primary ">Create item</a>
                    </p>
                    @if ($items->isEmpty())
                        <p>No items available.</p>
                    @else
                        <table class="table table-hover">
                            <thead>
                                <th>Item</th>
                                <th>Price</th>
                                <th></th>
                            </thead>
                            <tbody>
                                @foreach ($items as $item)
                                    <tr>
                                        <td>
                                            <a href="{{ route('items.show', $item->id) }}">
                                                {{ $item->name }}
                                            </a><br>
                                            <small>{{ $item->description }}</small>
                                        </td>
                                        <td>{{ $item->price }}</td>
                                        <td>
                                            <a href="{{ route('items.edit', $item->id) }}">Edit</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
