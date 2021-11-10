@extends('layout.tpadmin')

@section('isi')

<h1>Edit Konten</h1>
<br>
<br>
<h2>Pilih Konten Anda</h2>
<br>
<br>
<form action="editK" method="POST">
@csrf
  <div class="form-group">
    <label for="nama">Nama Tempat</label>
    <input type="text" name="namaTempat" class="form-control" id="nama" value="{{$konten->nama_tempat}}" required>
  </div>
  <div class="form-group">
    <label for="email">Alamat Tempat</label>
    <input type="text" name="alamatTempat" class="form-control" id="email" value="{{$konten->alamat_tempat}}" required>
  </div>
  <div class="form-group">
    <label for="desc">Deskripsi Tempat</label>
    <input type="text" name="deskripsiTempat" class="form-control" id="desc" value="{{$konten->deskripsi_tempat}}" required>
  </div>
  <div class="form-group">
    <label for="oc">Waktu Buka Tutup</label>
    <input type="text" name="waktuBukaTutup" class="form-control" id="oc" value="{{$konten->waktu_buka_tutup}}" required>
  </div>
  <input type="text" name="halamanLama" value="{{$konten->halaman}}" hidden>
  <input type="text" name="imgLama" value="{{$konten->image}}" hidden>
  <input type="text" name="idKonten" value="{{$konten->id}}" hidden>
  <br>
  <br>
  <div class="custom-file">
    <input type="file" name="imgBaru">
  </div>
  <br>
  <br>
  <button type="submit" class="btn btn-success">Ubah</button>
</form>

@endsection