@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if (session('massage'))
            <div class="alert alert-success">
                {{ session('massage') }}
            </div>
            @endif
            <form action="{{route('tanggapan.update', [$tanggapan->id])}}" method="post">
                @csrf
                {{method_field('PUT')}}
            <div class="card">
                <div class="card-header">Form Tanggapan Update</div>
                
                <div class="card-body">

                   <div class="form-group">
                    <input type="hidden" name="pengaduan_id" value="{{$tanggapan->pengaduan->id}}">
                </div>

                <div class="form-group">
                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                </div>



                <div class="form-group">
                    <label for="name">Tanggal</label>
                    <input type="date" name="tgl_tanggapan" class="form-control
                    @error('tgl_tanggapan') is-invalid @enderror">
                    @error('tgl_tanggapan')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="name">Tanggapan</label>
                    <textarea name="tanggapan" class="form-control
                    @error('tanggapan') is-invalid @enderror"></textarea>
                    @error('tanggapan')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="name">Status</label>
                    <select name="status" class="form-control
                    @error('status') is-invalid @enderror">
                  <option value="">Pilih Status</option>
                  <option value="0">Pending</option>
                  <option value="proses">Proses</option>
                  <option value="selesai">Selesai</option>
                  
                  
                  
                  
                    @error('status')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </select>
                </div>


                <div class="form-group">
                    <button type="submit" 
                    class="btn btn-outline-primary">Update</buttton>
                </div>
            
                </div>
            </div>
        </form>
        </div>
    </div>
</div>
@endsection
