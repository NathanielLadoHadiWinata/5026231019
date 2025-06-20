@extends('template')

@section('content')
<div class="container mt-4">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Tambah Data Karyawan</h4>
        </div>
        <div class="card-body">
            <a href="/eas" class="btn btn-secondary mb-3">← Kembali</a>
            @if ($errors->any())
    <div style="collor:blue">
        <ul>
            @foreach ($errors->all() as $err)
                <li>{{ $err }}</li>
            @endforeach
        </ul>
    </div>
@endif

            <form action="/newkaryawan/store" method="post">
                {{ csrf_field() }}

                <div class="mb-3">
                    <label for="NIP" class="form-label">NIP</label>
                    <input type="text" id="NIP" name="NIP" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="nama" class="form-label">nama</label>
                    <input type="text" id="nama" name="nama" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="pangkat" class="form-label">pangkat</label>
                    <input type="text" id="pangkat" name="pangkat" class="form-control" required>
                </div>

                 <div class="mb-3">
                    <label for="gaji" class="form-label">gaji</label>
                    <input type="text" id="gaji" name="gaji" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-success">💾 Simpan Data</button>
            </form>
        </div>
    </div>
</div>
@endsection
