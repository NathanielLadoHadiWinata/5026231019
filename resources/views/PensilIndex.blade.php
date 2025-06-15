@extends('template')
@section('content')

    <h3>Data pensil</h3>

    <a href="/pensil/tambah" class="btn btn-info"> + Tambah Pensil Baru</a>

    <form action="/pensil/cari" method="GET" class="form-inline">
        <label class="form-label"><strong>Cari Data pensil :</strong></label>
        <input type="text" name="cari" placeholder="Cari pensil .." class="form-control">
        <input type="submit" value="CARI" class="btn btn-primary">
    </form>
    <br />

    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>Merk Pensil</th>
            <th>Harga Pensil</th>
            <th>Tersedia</th>
            <th>Berat</th>
        </tr>
        @foreach ($pensil as $p)
            <tr>
                <td>{{ $p->ID }}</td>
                <td>{{ $p->merkpensil }}</td>
                <td>{{ $p->hargapensil }}</td>
                <td>{{ $p->tersedia }}</td>
                <td>{{ $p->berat }}</td>
                <td>
                    <a href="/pensil/hapus/{{ $p->ID }}"class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $pensil->links() }} <!-- hanya bisa dipakai dengan paginate, saat get() harus dihapus -->
@endsection
