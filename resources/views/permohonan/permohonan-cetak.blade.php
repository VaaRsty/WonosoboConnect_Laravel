<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Permohonan</title>
</head>
<body>
    <h1>Laporan Permohonan Layanan</h1>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Layanan</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Telepon</th>
                <th>Keterangan</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($permohonan as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->layanan }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->telepon }}</td>
                <td>{{ $item->keterangan }}</td>
                <td>{{ $item->status }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
