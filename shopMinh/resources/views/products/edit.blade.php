<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
</head>
<body>

<h2>Edit Product</h2>

@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('products.update', $product->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Name:</label>
    <input type="text" name="name" value="{{ $product->name }}"><br>
    
    <label>Description:</label>
    <textarea name="description">{{ $product->description }}</textarea><br>

    <label>Price:</label>
    <input type="text" name="price" value="{{ $product->price }}"><br>

    <button type="submit">Save</button>
</form>

</body>
</html>