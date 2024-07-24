<!DOCTYPE html>
<html>
<head>
    <title>Laporan Pembelian</title>
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
    <h1>Laporan Pembelian</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Nama Barang</th>
                <th>Nama Supplier</th>
                <th>Total Beli</th>
                <th>Total Harga</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pembelian as $p)
            <tr>
                <td>{{ $p->barang->namaBarang }}</td>
                <td>{{ $p->supplier->name }}</td>
                <td>{{ $p->total_beli }}</td>
                <td>{{ $p->total_harga }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
