@extends('layouts.main')

@section('container')
<div class="col-lg-6 mb-5">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Entri Jadwal Pelajaran</h1>
</div>
@if (session()->has('pesan'))
    <div class="alert alert-success mt-3" role="alert">
        {{session('pesan')}}
    </div>
@endif
<form method="post" action="{{ route('inputjadwalpelajaran.store') }}" enctype="multipart/form-data">
    @csrf

    <input type="hidden" name="kelas_id" value="{{ $kelas_id }}">

    <div class="mb-2">
        <label for="hari" class="form-label">Hari</label>
        <select class="form-select @error('hari') is-invalid @enderror" name="hari">
            @php
                $hari = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
            @endphp
            @foreach($hari as $option)
                <option value="{{$option}}" {{ old('hari') == $option ? 'selected' : '' }}>{{$option}}</option>
            @endforeach
        </select>
        @error('hari')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="mb-2">
        <label for="jam" class="form-label">Jam</label>
        <select class="form-select @error('jam') is-invalid @enderror" name="jam">
            @for ($i = 1; $i <= 12; $i++)
                @php
                    $selected = (old('jam') == $i) ? 'selected' : '';
                @endphp
                <option value="{{ $i }}" {{ $selected }}>{{ $i }}</option>
            @endfor
        </select>
        @error('jam')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="mb-2">
        <label for="pelajaran_id" class="form-label">Mata Pelajaran</label>
        <select class="form-select @error('pelajaran_id') is-invalid @enderror" name="pelajaran_id">
          @foreach($pelajaran as $pelajaran)
            @if(old('pelajaran_id')== $pelajaran->pelajaran_id)
              <option value="{{$pelajaran->pelajaran_id}}" selected>{{$pelajaran->nama_pelajaran}}</option>
            @else
              <option value="{{$pelajaran->pelajaran_id}}">{{$pelajaran->nama_pelajaran}}</option>
            @endif
          @endforeach
        </select>
        @error('pelajaran_id')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
      </div>
    
      
      <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection