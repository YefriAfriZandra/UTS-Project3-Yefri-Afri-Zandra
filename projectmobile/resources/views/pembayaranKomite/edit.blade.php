@extends('layouts.main')

@section('container')
<div class="col-lg-6 mb-5">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Pembayaran</h1>
</div>
<form method="post" action="/pembayaranKomite/{{$pembayarankomites->pembayaran_id}}">
    @method('PUT')
    @csrf
  
    <div class="mb-2">
      <label for="nis" class="form-label">NIS</label>
      <input type="number" class="form-control @error('nis') is-invalid @enderror" name="nis" value="{{ old('nis', $pembayarankomites->nis)}}">
      @error('nis')
      <div class="invalid-feedback">
          {{ $message }}
      </div>
      @enderror
    </div>

    <div class="mb-2">
      <label for="jenis_komite_id" class="form-label">Tipe Komite</label>
      <select class="form-select @error('jenis_komite_id') is-invalid @enderror" name="jenis_komite_id">
        @foreach($jenis_komite as $item)
          @if(old('jenis_komite_id', $pembayarankomites->jenis_komite_id)== $item->jenis_komite_id)
            <option value="{{$item->jenis_komite_id}}" selected>{{$item->type}}</option>
          @else
            <option value="{{$item->jenis_komite_id}}">{{$item->type}}</option>
          @endif
        @endforeach
      </select>
      @error('jenis_komite_id')
      <div class="invalid-feedback">
          {{ $message }}
      </div>
      @enderror
    </div>

    <div class="mb-2">
      <label for="bulan" class="form-label">Bulan</label>
      <select class="form-select @error('bulan') is-invalid @enderror" name="bulan">
          <option value="" disabled selected>Pilih bulan</option>
          <option value="Januari" {{ old('bulan', $pembayarankomites->bulan) == 'Januari' ? 'selected' : '' }}>Januari</option>
          <option value="Februari" {{ old('bulan', $pembayarankomites->bulan) == 'Februari' ? 'selected' : '' }}>Februari</option>
          <option value="Maret" {{ old('bulan', $pembayarankomites->bulan) == 'Maret' ? 'selected' : '' }}>Maret</option>
          <option value="April" {{ old('bulan', $pembayarankomites->bulan) == 'April' ? 'selected' : '' }}>April</option>
          <option value="Mei" {{ old('bulan', $pembayarankomites->bulan) == 'Mei' ? 'selected' : '' }}>Mei</option>
          <option value="Juni" {{ old('bulan', $pembayarankomites->bulan) == 'Juni' ? 'selected' : '' }}>Juni</option>
          <option value="Juli" {{ old('bulan', $pembayarankomites->bulan) == 'Juli' ? 'selected' : '' }}>Juli</option>
          <option value="Agustus" {{ old('bulan', $pembayarankomites->bulan) == 'Agustus' ? 'selected' : '' }}>Agustus</option>
          <option value="September" {{ old('bulan', $pembayarankomites->bulan) == 'September' ? 'selected' : '' }}>September</option>
          <option value="Oktober" {{ old('bulan', $pembayarankomites->bulan) == 'Oktober' ? 'selected' : '' }}>Oktober</option>
          <option value="November" {{ old('bulan', $pembayarankomites->bulan) == 'November' ? 'selected' : '' }}>November</option>
          <option value="Desember" {{ old('bulan', $pembayarankomites->bulan) == 'Desember' ? 'selected' : '' }}>Desember</option>
      </select>
      @error('bulan')
      <div class="invalid-feedback">
          {{ $message }}
      </div>
      @enderror
    </div>

    <div class="mb-2">
      <label for="jml_bayar" class="form-label">Jumlah Bayar</label>
      <input type="number" class="form-control @error('jml_bayar') is-invalid @enderror" name="jml_bayar" value="{{ old('jml_bayar', $pembayarankomites->jml_bayar)}}">
      @error('jml_bayar')
      <div class="invalid-feedback">
          {{ $message }}
      </div>
      @enderror
    </div>

    <div class="mb-2">
      <label for="tgl_bayar" class="form-label">Tanggal Bayar</label>
      <input type="date" class="form-control @error('tgl_bayar') is-invalid @enderror" name="tgl_bayar" value="{{ old('tgl_bayar', $pembayarankomites->tgl_bayar)}}">
      @error('tgl_bayar')
      <div class="invalid-feedback">
          {{ $message }}
      </div>
      @enderror
    </div>

      <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection