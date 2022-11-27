@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
            <form action="{{route('tanggapan.store')}}" method="post">
                @csrf
            <div class="card">
                <div class="card-header">Form Tanggapan</div>
                
                <div class="card-body">

                   <div class="form-group">
                    <input type="hidden" name="pengaduan_id" value="{{$pengaduan->id}}">
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
                    <input type="submit" 
                    class="btn btn-outline-primary">
                

                </div>
            
                </div>
            </div>
        </form>
        </div>
    </div>
</div>
@endsection
