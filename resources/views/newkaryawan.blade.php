
@extends('template')

@section('content')

<div class="container mt-4">
    <h3 class="mb-4">Data Karyawan</h3>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead class="table-dark">
                <tr>
                <th>NIP</th>
                <th>nama</th>
                <th>pangkat</th>
                <th>gaji</th>
                <th>opsi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($newkaryawan as $p)
                <tr>
                    <td>{{ $p->NIP }}</td>
                    <td>{{$p->nama }}</td>
                    <td>{{ $p->pangkat }}</td>
                    <td>{{$p->gaji}}</td>
        <td>
                        <a href="/newkaryawan/hapus/{{ $p->NIP }}" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>


        {{ $newkaryawan->links() }}
    </div>
    <div class="d-flex justify-content-between align-items-center mb-3">
        <a href="/tambah/newkaryawan" class="btn btn-primary">+ Tambah karyawan Baru</a>
</div>

@endsection
