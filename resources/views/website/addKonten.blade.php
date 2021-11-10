@extends('layout.tpadmin')

@section('isi')

<h1>Tambahkan Konten</h1>
<br>
<br>
@if (Session::has('extensiSalah'))
  <div class="slert alert-danger">
    {{ Session::get('extensiSalah') }}
    {{ Session::forget('extensiSalah') }}
  </div>
@endif
@if (Session::has('berhasilTambahKonten'))
  <div class="alert alert-success">
    {{ Session::get('berhasilTambahKonten') }}
    {{ Session::forget('berhasilTambahKonten') }}
  </div>
@endif
<form action="plusK" method="POST" enctype="multipart/form-data">
@csrf
    <input type="text" name="authorId" value="{{ Session::get('idAdmin') }}" hidden>
  <div class="form-group">
    <label for="nama">Nama Tempat</label>
    <input type="text" name="namaTempat" class="form-control" id="nama" placeholder="e.g. Bukit Kubu...." required>
  </div>
  <div class="form-group">
    <label for="alamat">Alamat Tempat</label>
    <input type="text" name="alamatTempat" class="form-control" id="alamat" placeholder="e.g. Jalan Djamin Ginting...." required>
  </div>
  <div class="form-group">
    <label for="deskripsi">Deskripsi Tempat</label>
    <input type="text" name="deskripsiTempat" class="form-control" id="deskripsi" placeholder="e.g. Bukit Kubu Berastagi menawarkan panorama...." required>
  </div>
  <div class="form-group">
    <label for="waktubukatutup">Waktu Buka & Tutup</label>
    <input type="text" name="waktuBukaTutup" class="form-control" id="waktubukatutup" placeholder="e.g. Jam buka yaitu dari jam...." required>
  </div>
  <br>
  <br>
  <div class="custom-file">
    <input type="file" name="image" required>
  </div>
  <br>
  <br>
  <button type="submit" class="btn btn-success">Tambah</button>
</form>

@endsection