<!DOCTYPE html>
<html>
<head>
    <title>Add New Product</title>
</head>
<body>

<h2>Add New Product</h2>

@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('products.store') }}" method="POST">
    @csrf
    <label>Name:</label>
    <input type="text" name="name" value="{{ old('name') }}"><br>
    
    <label>Description:</label>
    <textarea name="description">{{ old('description') }}</textarea><br>

    <label>Price:</label>
    <input type="text" name="price" value="{{ old('price') }}"><br>

    <button type="submit">Save</button>
</form>

</body>
</html>
