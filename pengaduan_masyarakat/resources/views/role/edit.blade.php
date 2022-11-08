@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        @if(Session::has('massage'))
            <div class="alert alert-success">
                {{Session::get('massage')}}
            </div>
            @endif
        <form action="{{route('role.update', [$role->id])}}" method="post">
                @csrf
                {{method_field('PUT')}}
            <div class="card">
                <div class="card-header">Update Role</div>

                <div class="card-body">
                
                   <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control
                    @error('name') is-invalid @enderror"
                    value="{{$role->name}}">
                    
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>

                    <div class="form-group">
                    <label for="name">Description</label>
                    <input type="text" name="description" class="form-control
                    @error('description') is-invalid @enderror"
                    value="{{$role->description}}">
                    
                    @error('description')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>

                
                <div class="form-group">
                    <input type="submit" value="update"class="btn
                    btn-outline-primary">
                

                </div>
            
                </div>
            </div>
        </form>
        </div>
    </div>
</div>
@endsection
