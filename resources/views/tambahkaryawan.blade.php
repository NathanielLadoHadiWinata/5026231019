@extends('template')

@section('content')
<div class="container mt-4">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Tambah Data Karyawan</h4>
        </div>
        <div class="card-body">
            <a href="/karyawan" class="btn btn-secondary mb-3">← Kembali</a>

            <form action="/karyawan/store" method="post">
                {{ csrf_field() }}

                <div class="mb-3">
                    <label for="kodepegawai" class="form-label">kode pegawai</label>
                    <input type="text" id="kodepegawai" name="kodepegawai" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="namalengkap" class="form-label">nama lengkap</label>
                    <input type="text" id="namalengkap" name="namalengkap" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="divisi" class="form-label">divisi</label>
                    <input type="text" id="divisi" name="divisi" class="form-control" required>
                </div>

                 <div class="mb-3">
                    <label for="departemen" class="form-label">departemen</label>
                    <input type="text" id="departemen" name="departemen" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-success">💾 Simpan Data</button>
            </form>
        </div>
    </div>
</div>
@endsection
