@extends('layouts.master')
@section('content')
<div class="container">
<div class="row justify-content-center">
<div class="col-md-4">
<div class="card">
<div class="card-header">Pengaduan</div>
<center>
<img src="{{asset('image')}}/{{$pengaduan->foto}}"
class="img-responsibe" width="70%">
</center>
<div class="card-body">
</div>
</div>
</div>
<div class="col-md-8">
<div class="card">
<div class="card-header">Detail pengaduan</div>
<div class="card-body">

<p>Nama : <b>{{$pengaduan->user->name}} </b> </p>
<p>NIK : <b>{{$pengaduan->user->nik}} </b> </p>
<p>Tanggal : <b>{{$pengaduan->tgl_pengaduan}} </b> </p>
<p>Isi Laporan : <b>{{$pengaduan->isi_laporan}}</b> </p>
<p> Status: <b>{{$pengaduan->status}}</b> </p>
<p> Tanggapan :
  @if (empty($pengaduan->tanggapan->tanggapan))
  <b> Belum ada Tanggapan </b>
  @else
  <b>{{ $pengaduan->tanggapan->tanggapan}}</b>
  @endif
</p>
<br>
<br>
<a href="{{route('tanggapan.show', [$pengaduan->id])}}">
<button class="btn btn-outline-success">Beri Tanggapan</button></a>

</div>
</div>
</div>
</div>
</div>
@endsection