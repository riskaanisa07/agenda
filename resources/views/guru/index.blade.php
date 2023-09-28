@extends('layout.template')

@section('kontenadmin')
<div class="card" style="margin-top: -100px;">
<div class="card-body">
<h4 class="card-title">Data Guru</h4>
<div class="pb-3">
    <form class="d-flex" action="{{ route('search') }}" method="GET">
        <input class="form-control me-1 rounded-pill" type="search" name="search" value="{{ Request::get('search') }}" placeholder="Masukan Kata Kunci" aria-label="Search">
        <button class="btn btn-secondary rounded-pill" type="submit">Cari</button>
    </form>
</div>
<a href="{{route('guru.create')}}" class="btn btn-primary mb-3 mt-3 rounded-pill">+Tambah</a>
<table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
    <thead class="table-light">
    <tr></tr>
    <tr></tr>
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Mata Pelajaran</th>
        <th>Kelas</th>
        <th>Email</th>
        <th>Username</th>
        <th>Password</th>
        <th>Aksi</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($guruk as $guru)
        <tr>
            <td>{{ $guru->id }}</td>
            <td>{{ $guru->nama }}</td>
            <td>{{ $guru->nama_mapel}}</td>
            <td>{{ $guru->kelas_id }}</td>
            <td>{{ $guru->email }}</td>
            <td>{{ $guru->username }}</td>
            <td>{{ $guru->password }}</td>
            <td>
                <a href="{{ url('guru/'.$guru->nama.'/edit') }}" type="submit" class="btn btn-warning">Edit</a>
                <form onsubmit="return confirm('Yakin akan hapus data?')" class="d-inline" action="{{ url('guru/'.$guru->nama) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" name="submit" class="btn btn-danger">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
</div>
@endsection