<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transactions PDF</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th,
        td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        .add-button {
            margin-bottom: 20px;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }

        .add-button:hover {
            background-color: #45a049;
        }

        .edit,
        .delete {
            padding: 5px 10px;
            margin-right: 5px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 3px;
        }

        .delete {
            background-color: #f44336;
        }

        .edit:hover,
        .delete:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <div class="content">
        <h2>Transactions</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tanggal</th>
                    <th>Keberangkatan</th>
                    <th>Tujuan</th>
                    <th>Jumlah Tiket</th>
                    <th>Total Harga</th>
                </tr>
            </thead>
            <tbody>
                @foreach($transaction as $transaction)
                <tr>
                    <td>{{ $transaction->id_transaksi }}</td>
                    <td>{{ $transaction->tanggal }}</td>
                    <td>{{ $transaction->keberangkatan }}</td>
                    <td>{{ $transaction->tujuan }}</td>
                    <td>{{ $transaction->jumlah_tiket }}</td>
                    <td>{{ $transaction->total_harga }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>