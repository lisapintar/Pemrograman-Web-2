<!DOCTYPE html>
<html>
<head>
    <title>Stok Kue</title>
    <style>
        body {
            font-family: Arial;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #000;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        .btn {
            padding: 5px 10px;
            text-decoration: none;
            border: 1px solid #000;
            margin: 2px;
            display: inline-block;
        }
        .add-btn {
            background: green;
            color: white;
            margin-bottom: 10px;
        }
        .edit-btn {
            background: orange;
            color: white;
        }
        .delete-btn {
            background: red;
            color: white;
        }
    </style>
</head>
<body>

    <h2>Data Stok Kue</h2>

    {{-- 🔥 TAMBAH DATA BUTTON --}}
    <a href="{{ route('product.create') }}" class="btn add-btn">
        + Tambah Data
    </a>

    {{-- 🔥 SUCCESS MESSAGE --}}
    @if(session('success'))
        <p style="color:green">{{ session('success') }}</p>
    @endif

    <table>
        <thead>
            <tr>
                <th>Nama Kue</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Tanggal Produksi</th>
                <th>Kadaluarsa</th>
                <th>Kategori</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($product as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>Rp {{ number_format($product->price) }}</td>
                    <td>{{ $product->stock }}</td>
                    <td>{{ $product->production_date }}</td>
                    <td>{{ $product->expired_date }}</td>
                    <td>{{ $product->category }}</td>

                    {{-- 🔥 STATUS --}}
                    <td>
                        @if ($product->isExpired())
                            <span style="color:red">Kadaluarsa</span>
                        @elseif ($product->isNearExpired())
                            <span style="color:orange">Hampir Kadaluarsa</span>
                        @else
                            <span style="color:green">Aman</span>
                        @endif
                    </td>

                    <td>
                        {{-- EDIT --}}
                        <a href="{{ route('product.edit', $product->id) }}" class="btn edit-btn">
                            Edit
                        </a>

                        {{-- DELETE --}}
                        <form action="{{ route('product.destroy', $product->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn delete-btn"
                                onclick="return confirm('Yakin mau hapus?')">
                                Hapus
                            </button>
                        </form>
                    </td>

                </tr>
            @empty
                <tr>
                    <td colspan="8">Belum ada data</td>
                </tr>
            @endforelse
        </tbody>
    </table>

</body>
</html>
