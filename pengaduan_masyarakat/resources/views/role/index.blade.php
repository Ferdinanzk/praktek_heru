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
            <div class="card">
                <div class="card-header">Semua Role <br>
        </div>
                <div class="card-body">
                   
                   <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($roles)>0)
                        @foreach($roles as $key=>$roles)
                        <tr>
                        <th scope="row">{{$key+1}}</th>
                        <td >{{$roles->name}}</td>
                        <td >{{$roles->description}}</td>

                        <td > <a href="{{route('role.edit', [$roles->id])}}">
                        <button class="btn btn-outline-success">Edit</button> </a></td>
                        
                        <td> 

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary"
                        data-toggle="modal"
                        data-target="#exampleModal{{$roles->id}}">
                        Delete
                        </button>
                        <!-- Modal -->
                        <div class="modal fade"
                        id="exampleModal{{$roles->id}}" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <form
                        action="{{route('role.destroy',[$roles->id])}}"
                        method="post">
                        @csrf
                        {{method_field('DELETE')}}
                        <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title"
                        id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close"
                        data-dismiss="modal" aria-label="Close">

                        <span aria-hidden="true">&times;</span>
                        </button>
                            </div>
                            <div class="modal-body">
                            Apakah Anda Yakin ?
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary"

                            data-dismiss="modal">Close</button>

                            <button type="submit" class="btn

                            btn-outline-danger">Delete</button>
                            </div>
                            </div>
                            </form>
                            </div>
                            </div>
                            </td>



                        
                        

                        </tr>
                        @endforeach
                        @else
                        <td> Tidak ada Kategori yang dapat ditampilkan.</td>
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
