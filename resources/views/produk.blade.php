<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>

</head>

<body>

    <h1>Data Produk</h1>


    @if (@session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <a href="produk/create">Tambah Produk Baru</a>
    <br>
    <b></b>
    <table border="1">

        <thead>

            <tr>

                <th>ID</th>

                <th>Nama Produk</th>

                <th>Harga</th>

                <th>Satuan</th>

                <th>Stok</th>

                <th>Kategori</th>

                <th>Action</th>

            </tr>

        </thead>

        <tbody>

            @foreach ($data as $produk)
                <tr>

                    <td>{{ $produk->id_produk }}</td>

                    <td>{{ $produk->nama_produk }}</td>

                    <td>{{ $produk->harga_satuan }}</td>

                    <td>{{ $produk->satuan }}</td>

                    <td>{{ $produk->stok }}</td>

                    <td>{{ $produk->kategori }}</td>

                    <td>
                        <a href="{{ route('produk.edit', $produk->id_produk) }}">Edit</a>

                        <form action="{{ route('produk.destroy', $produk->id_produk) }}" method="POST"
                            onsubmit="return confirm('Yakin mau hapus?')" style="display: inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Hapus</button>
                        </form>
                    </td>

                </tr>
            @endforeach

        </tbody>

    </table>

</body>

</html>
