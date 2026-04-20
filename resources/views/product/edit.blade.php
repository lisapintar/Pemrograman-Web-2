<!DOCTYPE html>
<html>
<head>
    <title>Edit Produk Kue</title>
    <style>
        body {
            font-family: Arial;
        }
        form {
            width: 400px;
        }
        input, textarea {
            width: 100%;
            padding: 8px;
            margin: 5px 0;
        }
        button {
            padding: 10px;
        }
    </style>
</head>
<body>

    <h2>Edit Data Kue</h2>

    <form action="{{ route('product.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nama Kue:</label>
        <input type="text" name="name" value="{{ $product->name }}" required>

        <label>Harga:</label>
        <input type="number" name="price" value="{{ $product->price }}" required>

        <label>Stok:</label>
        <input type="number" name="stock" value="{{ $product->stock }}" required>

        <label>Tanggal Produksi:</label>
        <input type="date" name="production_date" value="{{ $product->production_date }}" required>

        <label>Tanggal Kadaluarsa:</label>
        <input type="date" name="expired_date" value="{{ $product->expired_date }}" required>

        <label>Kategori:</label>
        <input type="text" name="category" value="{{ $product->category }}" required>

        <label>Deskripsi:</label>
        <textarea name="description">{{ $product->description }}</textarea>

        <br><br>
        <button type="submit">Update</button>
    </form>

</body>
</html>
