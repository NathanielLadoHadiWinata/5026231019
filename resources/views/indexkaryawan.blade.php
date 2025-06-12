
@extends('template')

@section('content')

<div class="container mt-4">
    <h3 class="mb-4">Data Karyawan</h3>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead class="table-dark">
                <tr>
                <th>Kode Pegawai</th>
                <th>Nama Lengkap</th>
                <th>Divisi</th>
                <th>Departemen</th>
                <th>opsi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($karyawan as $p)
                <tr>
                    <td>{{ $p->kodepegawai }}</td>
                    <td>{{ strtoupper($p->namalengkap) }}</td>
                    <td>{{ $p->divisi }}</td>
                    <td>{{ strtolower($p->departemen) }}</td>
        <td>
                        <a href="/karyawan/hapus/{{ $p->kodepegawai }}" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>


        {{ $karyawan->links() }}
    </div>
    <div class="d-flex justify-content-between align-items-center mb-3">
        <a href="/tambah/karyawan" class="btn btn-primary">+ Tambah karyawan Baru</a>
</div>

@endsection
