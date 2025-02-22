@extends('layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Daftar Nilai</h1>
</div>
@if (session()->has('pesan'))
    <div class="alert alert-success mt-3" role="alert">
        {{session('pesan')}}
    </div>
@endif
<a href="/nilai/create" class="btn btn-primary"> <span data-feather="plus-circle"></span>
    Create Pelajaran </a>
    <table class="table table-bordered table-sm my-4">
        <tr>
            <th>No</th>
            <th>Nama Siswa</th>
            <th>Pelajaran</th>
            <th>Rata-rata</th>
            <th>Nilai Kepribadian</th>
            <th class="text-center align-middle">S</th>
            <th class="text-center align-middle">A</th>
            <th class="text-center align-middle">I</th>
            <th class="text-center align-middle">Aksi</th>

        </tr>
        @foreach ($nilais as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->siswas->nama_siswa }}</td>
            <td>{{ $item->pelajarans->nama_pelajaran }}</td>
            <td>{{ ($item->nilai_tugas + $item->nilai_uts + $item->nilai_uas) / 3 }}</td>
            <td>{{ $item->nilai_kepribadian }}</td>
            <td class="text-center align-middle">{{ $item->sakit }}</td>
            <td class="text-center align-middle">{{ $item->alfa }}</td>
            <td class="text-center align-middle">{{ $item->izin }}</td>
            <td class="text-center align-middle">
                <a href="nilai/{{ $item->nilai_id }}/edit" class="btn btn-warning btn-sm"><span data-feather="edit"></span>Edit</a>
                <form action="nilai/{{$item->nilai_id}}" method="post" class="d-inline">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin akan menghapus data ?')"><span data-feather="trash-2"></span>Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    {{$nilais->links()}}
@endsection