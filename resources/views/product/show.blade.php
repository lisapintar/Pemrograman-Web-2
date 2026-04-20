<!DOCTYPE html>
<html>
<head>
    <title>Detail Produk Kue</title>
    <style>
        body {
            font-family: Arial;
        }
        .container {
            width: 400px;
        }
        .box {
            border: 1px solid #000;
            padding: 15px;
        }
        p {
            margin: 5px 0;
        }
    </style>
</head>
<body>

    <h2>Detail Produk Kue</h2>

    <div class="container">
        <div class="box">
            <p><strong>Nama:</strong> {{ $product->name }}</p>
            <p><strong>Harga:</strong> Rp {{ number_format($product->price) }}</p>
            <p><strong>Stok:</strong> {{ $product->stock }}</p>
            <p><strong>Tanggal Produksi:</strong> {{ $product->production_date }}</p>
            <p><strong>Kadaluarsa:</strong> {{ $product->expired_date }}</p>
            <p><strong>Kategori:</strong> {{ $product->category }}</p>
            <p><strong>Deskripsi:</strong> {{ $product->description }}</p>

            <p><strong>Status:</strong>
                @if ($product->isExpired())
                    ❌ Kadaluarsa
                @elseif ($product->isNearExpired())
                    ⚠️ Hampir Kadaluarsa
                @else
                    ✅ Aman
                @endif
            </p>
        </div>

        <br>
        <a href="/product">← Kembali</a>
    </div>

</body>
</html>
