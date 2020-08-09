@extends('layouts.master')

@section('content')

<div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">edit proyek {{ $proyek->id }}</h6>
                </div>
                <div class="card-body">
                <form role="form" action="/proyek" method="POST">
    @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="inputJitle">Nama Proyek</label>
          <input type="text" class="form-control" id="nama_proyek" name="nama_proyek" values="{{ old('nama_proyek',' ') }}" placeholder="Masukkan Nama Proyek">
          @error('nama proyek')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group">
          <label for="inputBody">Isi</label>
          <input type="text" class="form-control" id="deskripsi_proyek" name="deskripsi_proyek" values="{{ old('deskripsi_proyek', ' ') }}" placeholder="Masukkan Deskripsi Proyek">
        </div>
        @error('isi')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Create</button>
      </div>
    </form>
                </div>
              </div>
@endsection