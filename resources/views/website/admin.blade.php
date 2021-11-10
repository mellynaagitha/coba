@extends('layout.tpadmin')

@section('isi')

<h1>List Admin</h2>
<br>
<br>
@if(Session::has('berhasilHapusAdmin'))
  <div class="alert alert-success">
    {{ Session::get('hapusAdmin') }}
    {{ Session::forget('hapusAdmin') }}
  </div>
@endif
@if(Session::has('tidakBolehHapus'))
  <div class="alert alert-danger">
    {{ Session::get('tidakBolehHapus') }}
    {{ Session::forget('tidakBolehHapus') }}
  </div>
@endif
@if (Session::has('ubahAdmin'))
  <div class="alert alert-success">
    {{ Session::get('ubahAdmin') }}
    {{ Session::forget('ubahAdmin') }}
  </div>
@endif
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Email</th>
      <th scope="col">Dibuat Pada</th>
      <th scope="col">Level</th>
    </tr>
  </thead>
  <tbody>
  
  <?php $i=0 ?>
  @foreach($admins as $admin)
    <tr>
      <?php $i++ ?>
      <th scope="row">{{$i}}</th>
      <td>{{$admin->name}}</td>
      <td>{{$admin->email}}</td>
      <td>{{$admin->created_at}}</td>
      <td>{{$admin->level}}</td>
      <td></td>
    </tr>
    @endforeach
  </tbody>
</table>
      
@endsection