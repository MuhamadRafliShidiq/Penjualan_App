<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Laporan Data Penjualan</title>
    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
            font-size: 11.5px;
            color: #2c3e50;
            padding: 30px;
        }

        h2 {
            text-align: center;
            margin-bottom: 5px;
            text-transform: uppercase;
            font-size: 18px;
            letter-spacing: 1px;
        }

        .subtext {
            text-align: center;
            font-size: 11px;
            margin-bottom: 20px;
            color: #666;
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
            vertical-align: top;
            word-wrap: break-word;
        }

        th {
            background-color: #f8f9fa;
            font-weight: bold;
            text-align: center;
            font-size: 12px;
        }

        td {
            font-size: 11.5px;
        }

        tbody tr:nth-child(even) {
            background-color: #fdfdfd;
        }

        .footer {
            margin-top: 50px;
            text-align: right;
            font-size: 10.5px;
            color: #666;
        }

        .footer p {
            margin: 2px 0;
        }

        /* Kolom proporsional */
        .col-no { width: 25%; }
        .col-nama { width: 40%; }
        .col-tanggal { width: 35%; }
    </style>
</head>
<body>

    <h2>Laporan Penjualan</h2>
    <div class="subtext">
        Dicetak pada: {{ \Carbon\Carbon::now()->format('d-m-Y H:i') }}
    </div>

    <table>
        <thead>
            <tr>
                <th class="col-no">No Faktur</th>
                <th class="col-nama">Nama Pelanggan</th>
                <th class="col-tanggal">Tanggal Penjualan</th>
            </tr>
        </thead>
        <tbody>
            @foreach($penjualan as $p)
                <tr>
                    <td>{{ $p->faktur }}</td>
                    <td>{{ $p->pelanggan->nama_pelanggan ?? '-' }}</td>
                    <td style="text-align: center;">
                        {{ \Carbon\Carbon::parse($p->tanggal_penjualan)->format('d-m-Y') }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="footer">
        <p>© {{ now()->year }} Sistem Penjualan — PT. Nama Perusahaan</p>
    </div>

</body>
</html>
