@extends('layouts.app')

@section('title', 'Edit Permohonan')

@section('content')
    <h2>Edit Permohonan</h2>

    <form action="{{ route('permohonan.update', $permohonan->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="layanan">Pilih Jenis Layanan:</label>
        <select name="layanan" required>
            <option value="Pendaftaran Pemeriksaan Kesehatan" {{ $permohonan->layanan == 'Pendaftaran Pemeriksaan Kesehatan' ? 'selected' : '' }}>Pendaftaran Pemeriksaan Kesehatan</option>
            <option value="Vaksinasi COVID-19 dan Imunisasi Anak" {{ $permohonan->layanan == 'Vaksinasi COVID-19 dan Imunisasi Anak' ? 'selected' : '' }}>Vaksinasi COVID-19 dan Imunisasi Anak</option>
            <option value="Pelayanan Kesehatan Ibu dan Anak" {{ $permohonan->layanan == 'Pelayanan Kesehatan Ibu dan Anak' ? 'selected' : '' }}>Pelayanan Kesehatan Ibu dan Anak</option>
            <option value="Konsultasi Kesehatan Jarak Jauh" {{ $permohonan->layanan == 'Konsultasi Kesehatan Jarak Jauh' ? 'selected' : '' }}>Konsultasi Kesehatan Jarak Jauh</option>
        </select>

        <label for="nama">Nama:</label>
        <input type="text" name="nama" value="{{ $permohonan->nama }}" required>

        <label for="email">Email:</label>
        <input type="email" name="email" value="{{ $permohonan->email }}" required>

        <label for="telepon">Telepon:</label>
        <input type="text" name="telepon" value="{{ $permohonan->telepon }}" required>

        <label for="keterangan">Keterangan:</label>
        <textarea name="keterangan">{{ $permohonan->keterangan }}</textarea>

        <label for="status">Status Permohonan:</label>
        <select name="status" required>
            <option value="pending" {{ $permohonan->status == 'pending' ? 'selected' : '' }}>Pending</option>
            <option value="diterima" {{ $permohonan->status == 'diterima' ? 'selected' : '' }}>Diterima</option>
            <option value="proses" {{ $permohonan->status == 'proses' ? 'selected' : '' }}>Proses</option>
            <option value="selesai" {{ $permohonan->status == 'selesai' ? 'selected' : '' }}>Selesai</option>
        </select>

        <button type="submit">Simpan Perubahan</button>
    </form>
@endsection
