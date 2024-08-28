<h2>Create item</h2>
<form method="POST" action="{{ route('items.store') }}">
    @csrf
    <div>
        <label>Name</label>
        <input type="text" name="name">
    </div>
    <div>
        <label>Description</label>
        <input type="text" name="description">
    </div>
    <div>
        <label>Price</label>
        <input type="text" name="price">
    </div>
    <button type="submit">Save item</button>
    or <a href="{{ route('items.index') }}">cancel</a>
</form>
