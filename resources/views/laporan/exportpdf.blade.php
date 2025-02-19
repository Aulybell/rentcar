<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Transaksi</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
     <h1>Laporan Transaksi</h1>
     <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">No Polisi</th>
                <th scope="col">Nama</th>
                <th scope="col">Alamat</th>
                <th scope="col">Lama</th>
                <th scope="col">Tanggal Pesan</th>
                <th scope="col">Total</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($transaksi as $data)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $data->mobil->nopolisi }}</td>
                <td>{{ $data->nama }}</td>
                <td>{{ $data->alamat }}</td>
                <td>{{ $data->lama }}</td>
                <td>{{ $data->tgl_pesan }}</td>
                <td>{{ $data->total }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="6">Data laporan belum ada!</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>
