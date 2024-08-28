<h2>{{ $item->name }}</h2>

{{ $item->description }}

<p>
    Price: {{ $item->price }}
</p>
<p>
    <a href="{{ route('items.index') }}">back</a>
</p>
