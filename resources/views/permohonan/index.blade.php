@extends('layouts.app')

@section('title', 'Data Permohonan Layanan - Wonosobo Connect')

@section('content')
<main>
    <section>
        <h2>Data Permohonan Layanan</h2>

        <!-- Tabel Data Permohonan -->
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Layanan</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Telepon</th>
                    <th>Keterangan</th>
                    <th>Status</th>
                    <th>Aksi</th>
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
                    <td>{{ $item->status }}</td> <!-- Menampilkan status -->
                    <td>
                        <a href="{{ route('permohonan.edit', $item->id) }}">Edit</a>
                        <form action="{{ route('permohonan.destroy', $item->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Button Tambah Permohonan -->
        <a href="{{ route('permohonan.create') }}" class="btn-tambah">Tambah Permohonan</a>
        <a href="{{ route('permohonan.cetak') }}" class="btn btn-primary" target="_blank">
    <i class="fa fa-print"></i> Cetak PDF
</a>
    </section>
</main>
@endsection
