<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Data Barang</title>
    <style>
        body {
            font-family: DejaVu Sans, Arial, sans-serif;
            font-size: 11.5px;
            padding: 30px;
            color: #333;
        }

        h2 {
            text-align: center;
            margin-bottom: 25px;
            font-size: 18px;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #2c3e50;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
            table-layout: fixed;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 8px 10px;
            word-wrap: break-word;
        }

        th {
            background-color: #f1f1f1;
            text-align: center;
            font-weight: bold;
            font-size: 12px;
            color: #2c3e50;
        }

        td {
            font-size: 11.5px;
        }

        /* Zebra striping */
        tbody tr:nth-child(even) {
            background-color: #fafafa;
        }

        /* Tanda tangan/footer */
        .footer {
            margin-top: 40px;
            text-align: right;
            font-size: 11px;
        }

        .footer p {
            margin: 4px 0;
        }
    </style>
</head>
<body>

    <h2>Laporan Data Barang</h2>

    <table>
        <thead>
            <tr>
                <th style="width: 10%;">No</th>
                <th style="width: 30%;">Kode</th>
                <th style="width: 40%;">Nama Barang</th>
                <th style="width: 20%;">Harga (Rp)</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $index => $barang)
                <tr>
                    <td style="text-align: center;">{{ $index + 1 }}</td>
                    <td>{{ $barang->kd_barang }}</td>
                    <td>{{ $barang->nama_barang }}</td>
                    <td style="text-align: right;">{{ number_format($barang->harga_barang, 0, ',', '.') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="footer">
        <p>Dicetak pada: {{ \Carbon\Carbon::now()->format('d-m-Y H:i') }}</p>
    </div>

</body>
</html>
