<!DOCTYPE html>
<html>
<head>
    <title>Product List</title>
</head>
<body>

<h2>Product List</h2>

<a href="{{ route('products.create') }}">Add New Product</a>

@if ($message = Session::get('success'))
    <div>
        <strong>{{ $message }}</strong>
    </div>
@endif

<table border="1">
    <tr>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Action</th>
    </tr>
    @foreach ($products as $product)
    <tr>
        <td>{{ $product->name }}</td>
        <td>{{ $product->description }}</td>
        <td>{{ $product->price }}</td>
        <td>
            <a href="{{ route('products.edit', $product->id) }}">Edit</a>

            <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

</body>
</html>
