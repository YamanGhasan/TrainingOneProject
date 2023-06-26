<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            padding: 0;
        }
        .container {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Product List</h1>
        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->created_at }}</td>
                        <td>{{ $product->updated_at }}</td>
                        <td><a href="{{ route('products.edit', $product->id) }}">Edit</a></td>
                        <td>
                        <form action="{{ route('products.delete', $product->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <a href="{{ route('products.add') }}">Add Product</
