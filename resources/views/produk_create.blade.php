<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Produk</title>
</head>

<body>
    <h1> Tambah Produk Baru</h1>
    <a href="/produk">Kembali</a>
    <br>


    @if ($errors->any())
        <div style="color:red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/produk" method="POST">
        @csrf
        <table>
            <tr>
                <td>Nama Produk</td>
                <td>:</td>
                <td>
                    <input type="text" name="nama_produk" value="{{ old('nama_produk') }}">
                </td>
            </tr>
            <tr>
                <td>Kategori</td>
                <td>:</td>
                <td>
                    <input type="text" name="kategori" value="{{ old('kategori') }}">
                </td>
            </tr>
            <tr>
                <td>Harga Satuan</td>
                <td>:</td>
                <td>
                    <input type="text" name="harga_satuan" value="{{ old('harga_satuan') }}">
                </td>
            </tr>
            <tr>
                <td>Stok</td>
                <td>:</td>
                <td>
                    <input type="text" name="stok" value="{{ old('stok') }}">
                </td>
            </tr>
            <tr>
                <td>Satuan</td>
                <td>:</td>
                <td>
                    <input type="text" name="satuan" value="{{ old('satuan') }}">
                </td>
            </tr>
            <tr>
                <td colspan="3" style="padding-top: 10px;">
                    <button type="submit">Simpan Produk</button>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>
