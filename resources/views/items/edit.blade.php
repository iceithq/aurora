<h2>Edit item</h2>
<form method="POST" action="{{ route('items.update', $item->id) }}">
    @csrf
    @method('PUT')
    <div>
        <label>Name</label>
        <input type="text" name="name" value="{{ $item->name }}">
    </div>
    <div>
        <label>Description</label>
        <input type="text" name="description" value="{{ $item->description }}">
    </div>
    <div>
        <label>Price</label>
        <input type="text" name="price" value="{{ $item->price }}">
    </div>
    <button type="submit">Update item</button>
    or <a href="{{ route('items.index') }}">cancel</a>
</form>
