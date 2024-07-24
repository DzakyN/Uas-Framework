<!DOCTYPE html>
<html>
<head>
    <title>Laporan Penjualan</title>
    <style>
        .table {
            width: 100%;
            border-collapse: collapse;
        }

        .table, .table th, .table td {
            border: 1px solid black;
        }

        .table th, .table td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Laporan Penjualan</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Nama Barang</th>
                <th>Nama Supplier</th>
                <th>Jumlah Jual</th>
                <th>Harga Jual</th>
                <th>Total Harga</th>
                <th>Keuntungan</th>
            </tr>
        </thead>
        <tbody>
            @foreach($penjualan as $p)
            <tr>
                <td>{{ $p->pembelian->barang->namaBarang }}</td>
                <td>{{ $p->pembelian->supplier->name }}</td>
                <td>{{ $p->jumlah_jual }}</td>
                <td>{{ $p->harga_jual }}</td>
                <td>{{ $p->total_harga }}</td>
                <td>{{ $p->keuntungan }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
