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
            <form action="{{route('role.store')}}" method="post">
                @csrf
            <div class="card">
                <div class="card-header">Manage Role</div>
                
                <div class="card-body">

                   <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control
                    @error('name') is-invalid @enderror">
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="name">Decsription</label>
                    <input type="text" name="description" class="form-control
                    @error('description') is-invalid @enderror">
                    @error('description')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="submit" class="btn
                    btn-outline-primary">
                

                </div>
            
                </div>
            </div>
        </form>
        </div>
    </div>
</div>
@endsection
