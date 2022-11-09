@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @if(Session::has('message'))
                <div class="alert alert-success">
                    {{Session::get('message')}}
                </div>
                @endif
                <form action="{{route('pengaduan.store')}}" method="post">
                @csrf
                <div class="card-header">Tambah Pengaduan</div>

                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Date</label>
                            <input type="date" name="tanggal" class="form-control @error('tanggal') is-invalid @enderror">

                            @error('tanggal')
                            <span class="invalid-feedback" role="alert">

                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror   

                            <label>Nama User</label>
                            <select name="role_id" class="form-control @error('user_id') is-invalid @enderror">
                                <option value="">Pilih User</option>
                                @foreach(App\Models\User::all() as $user)
                                <option value="{{$user->id}}">{{$user->name}}</option>
                                @endforeach

                                @error('user_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </select>
                        
                            
                        <label for="isi_laporan">Laporan</label>
                            <input type="text" name="isi_laporan" class="form-control @error('isi_laporan') is-invalid @enderror">

                            @error('isi_laporan')
                            <span class="invalid-feedback" role="alert">

                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror   
                            
                        <label for="foto">Foto</label>
                            <input type="file" name="foto" class="form-control @error('foto') is-invalid @enderror">

                            @error('foto')
                            <span class="invalid-feedback" role="alert">

                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        


                   <br>
                            <div class="form-group">
                                <button class="btn btn-outline-primary">Submit</button>
                            </div>
                   
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection