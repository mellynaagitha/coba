@extends('layout.tpadmin')

@section('isi')

<h1>Pengaturan Akun</h1>
<br>
<br>
<form action="akunSet" method="POST">
@csrf
  <div class="form-group">
    <label for="nama">Nama</label>
    <input type="text" name="nama" class="form-control" id="nama" value="{{$data->name}}" required>
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" name="email" class="form-control" id="email" value="{{$data->email}}" required aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">Kami tidak akan membagikan email anda ke sembarang orang (_____@___.___)</small>
  </div>
  <div class="form-group">
    <label for="pw">Password</label>
    <input type="password" name="password" class="form-control" id="pw" placeholder="********">
  </div>
  <button type="submit" class="btn btn-success">Ubah</button>
</form>
@endsection