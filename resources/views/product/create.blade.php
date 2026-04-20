<!DOCTYPE html>
<html>
<head>
    <title>Tambah Produk Kue</title>
   <!DOCTYPE html>
<html>
<head>
    <title>Tambah Produk Kue</title>
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
        .error {
            color: red;
        }
    </style>
</head>
<body>

    <h2>Tambah Data Kue</h2>

    {{-- ERROR VALIDASI --}}
    @if ($errors->any())
        <div class="error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- FORM --}}
    <form action="{{ route('product.store') }}" method="POST">
        @csrf

        <label>Nama Kue:</label>
        <input type="text" name="name" required>

        <label>Harga:</label>
        <input type="number" name="price" required>

        <label>Stok:</label>
        <input type="number" name="stock" required>

        <label>Tanggal Produksi:</label>
        <input type="date" name="production_date" required>

        <label>Tanggal Kadaluarsa:</label>
        <input type="date" name="expired_date" required>

        <label>Kategori:</label>
        <input type="text" name="category" required>

        <label>Deskripsi:</label>
        <textarea name="description"></textarea>

        <br><br>
        <button type="submit">Simpan</button>
    </form>

    <br>

    {{--  BUTTON KEMBALI --}}
    <a href="{{ route('product.index') }}">
        ← Kembali
    </a>

</body>
</html>

</head>
<body>

    <h2>Tambah Data Kue</h2>

    {{--  ERROR VALIDASI --}}
    @if ($errors->any())
        <div class="error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{--  FORM --}}
    <form action="{{ route('product.store') }}" method="POST">
        @csrf

        <label>Nama Kue:</label>
        <input type="text" name="name" required>

        <label>Harga:</label>
        <input type="number" name="price" required>

        <label>Stok:</label>
        <input type="number" name="stock" required>

        <label>Tanggal Produksi:</label>
        <input type="date" name="production_date" required>

        <label>Tanggal Kadaluarsa:</label>
        <input type="date" name="expired_date" required>

        <label>Kategori:</label>
        <input type="text" name="category" required>

        <label>Deskripsi:</label>
        <textarea name="description"></textarea>

        <br><br>
        <button type="submit">Simpan</button>
    </form>

    <br>

    {{--  BUTTON KEMBALI --}}
    <a href="{{ route('product.index') }}">
        ← Kembali
    </a>

</body>
</html>
