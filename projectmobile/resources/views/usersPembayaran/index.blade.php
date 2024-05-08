@extends('layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Daftar Admin Pembayaran</h1>
</div>
@if (session()->has('pesan'))
    <div class="alert alert-success mt-3" role="alert">
        {{session('pesan')}}
    </div>
@endif
<a href="/usersPembayaran/create" class="btn btn-primary"> <span data-feather="plus-circle"></span>
    Create User </a>
    <table class="table table-bordered table-sm my-4">
        <tr>
            <th class="text-center align-middle">No</th>
            <th class="text-center align-middle">Foto</th>
            <th class="text-center align-middle">NIP</th>
            <th class="text-center align-middle">Nama</th>
            <th class="text-center align-middle">Jenis Kelamin</th>
            <th class="text-center align-middle">Alamat</th>
            <th class="text-center align-middle">Telp</th>
            <th class="text-center align-middle">Aksi</th>
        </tr>
        @foreach ($admin_pembayarans as $item)
        <tr>
            <td class="text-center align-middle">{{ $loop->iteration }}</td>
            <td class="text-center align-middle"><img src="/images/{{ $item->foto_adm }}" alt="" style="width: 95px; height: 120px"></td>
            <td class="text-center align-middle">{{ $item->nip_peg_pem }}</td>
            <td class="text-center align-middle">{{ $item->nama_pegawai }}</td>
            <td class="text-center align-middle">{{ $item->jenis_kelamin }}</td>
            <td class="text-center align-middle">{{ $item->alamat }}</td>
            <td class="text-center align-middle">{{ $item->telp }}</td>
            </td>
            <td class="text-center align-middle">
                <a href="usersPembayaran/{{ $item->nip_peg_pem }}/edit" class="btn btn-warning btn-sm"><span data-feather="edit"></span>Edit</a>
                <form action="usersPembayaran/{{$item->nip_peg_pem}}" method="post" class="d-inline">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin akan menghapus data ?')"><span data-feather="trash-2"></span>Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    {{$admin_pembayarans->links()}}
@endsection