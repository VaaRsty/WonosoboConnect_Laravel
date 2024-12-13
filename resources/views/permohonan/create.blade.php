@extends('layouts.app')

@section('title', 'Tambah Permohonan')

@section('content')
    <h2>Tambah Permohonan</h2>
    <form action="{{ route('permohonan.store') }}" method="POST">
        @csrf
        <label for="layanan">Pilih Jenis Layanan:</label>
        <select name="layanan" required>
            <option value="Pendaftaran Pemeriksaan Kesehatan">Pendaftaran Pemeriksaan Kesehatan</option>
            <option value="Vaksinasi COVID-19 dan Imunisasi Anak">Vaksinasi COVID-19 dan Imunisasi Anak</option>
            <option value="Pelayanan Kesehatan Ibu dan Anak">Pelayanan Kesehatan Ibu dan Anak</option>
            <option value="Konsultasi Kesehatan Jarak Jauh">Konsultasi Kesehatan Jarak Jauh</option>
        </select>
        
        <label for="nama">Nama:</label>
        <input type="text" name="nama" required>
        
        <label for="email">Email:</label>
        <input type="email" name="email" required>
        
        <label for="telepon">Telepon:</label>
        <input type="text" name="telepon" required>
        
        <label for="keterangan">Keterangan:</label>
        <textarea name="keterangan"></textarea>

        <label for="status">Status Permohonan:</label>
        <select name="status" required>
            <option value="pending">Pending</option>
            <option value="diterima">Diterima</option>
            <option value="proses">Proses</option>
            <option value="selesai">Selesai</option>
        </select>

        <button type="submit">Simpan</button>
    </form>
@endsection
