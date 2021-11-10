@extends('layout.tpadmin')

@section('isi')

<h1>List Konten</h1>
<br>
<br>
@if (Session::has('berhasilHapusKonten'))
  <div class="alert alert-success">
    {{Session::get('berhasilHapusKonten')}}
    {{Session::forget('berhasilHapusKonten')}}
  </div>
@endif
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Tempat</th>
      <th scope="col">Alamat</th>
      <th scope="col">Deskripsi</th>
      <th scope="col">Waktu Buka/Tutup</th>
      <th scope="col">Image</th>
      <th scope='col'>Action</th>
      <th scope="col">Author</th>
      <th scope='col'>Baru Diupload</th>
      <th scope='col'>Baru Diupdate</th>
    </tr>
  </thead>
  <tbody>

  <?php $i=0; ?>
  @foreach($pariwisatas as $pariwisata)
    <tr>
      <?php $i++ ?>
      <td>{{$i}}</td>
      <td>{{$pariwisata->nama_tempat}}</td>
      <td>{{$pariwisata->alamat_tempat}}</td>
      <td align="justify">{{$pariwisata->deskripsi_tempat}}</td>
      <td align="justify">{{$pariwisata->waktu_buka_tutup}}</td>
      <td>{{$pariwisata->image}}</td>
      <td><form action="listK" method="post">
      @csrf
      <input type="text" name="idKonten" value="{{$pariwisata->id}}" hidden>
      <input type="text" name="imgKonten" value="{{$pariwisata->image}}" hidden>
      <button type="submit" class="btn btn-danger">Hapus</button>
      </form>
      <form action="editK" method="put">
      @csrf
      <input type="text" name="idKontenUbah" value="{{$pariwisata->id}}" hidden>
      <button type="submit" class="btn btn-warning">Ubah</button>
      </form>
      </td>
      <td>{{$pariwisata->author->name}}</td>
      <td>{{$pariwisata->created_at}}</td>
      <td>{{$pariwisata->updated_at}}</td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection