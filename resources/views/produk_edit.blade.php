<!DOCTYPE html>
<html>
<head>
    <title>Edit Produk</title>
</head>
<body>

<h1>Edit Produk</h1>

<a href="/produk">Kembali ke Data Produk</a>
<br><br>

{{-- TAMPILKAN ERROR --}}
@if ($errors->any())
    <div style="color:red">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="/produk/{{ $produk->id_produk }}" method="POST">
    @csrf
    @method('PUT')

    <table>
        <tr>
            <td>Nama Produk</td>
            <td>
                <input type="text" name="nama_produk"
                    value="{{ old('nama_produk', $produk->nama_produk) }}" required>
            </td>
        </tr>

        <tr>
            <td>Kategori</td>
            <td>
                <input type="text" name="kategori"
                    value="{{ old('kategori', $produk->kategori) }}" required>
            </td>
        </tr>

        <tr>
            <td>Harga Satuan</td>
            <td>
                <input type="number" name="harga_satuan" step="0.01"
                    value="{{ old('harga_satuan', $produk->harga_satuan) }}" required>
            </td>
        </tr>

        <tr>
            <td>Stok</td>
            <td>
                <input type="number" name="stok" min="0"
                    value="{{ old('stok', $produk->stok) }}" required>
            </td>
        </tr>

        <tr>
            <td>Satuan</td>
            <td>
                <input type="text" name="satuan"
                    value="{{ old('satuan', $produk->satuan) }}" required>
            </td>
        </tr>

        <tr>
            <td colspan="2">
                <button type="submit">Update Produk</button>
            </td>
        </tr>
    </table>
</form>

</body>
</html>
