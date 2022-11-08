@extends('layouts.master')
@section('content')



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            @if(Session::has('message'))
            <div class="alert alert-success">
                {{Session::get('message')}}
            </div>
            @endif

            <!-- <div class="card shadow mb-4 my-5">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Tambah Permission</h6>
                </div>
            </div> -->
            <form action="{{route('permiss.update',[$permissions->id])}}" method="post">
                @csrf
                <div class="card">
                <div class="card-header">Edit Permission</div>
            {{method_field('PATCH')}}
                <div class="card-body">
                    <div class="form-group">
                       <H3>{{ $permissions->role->name }}</H3>
                    </div>

                        <div class="table-responsive">
                            <table class="table table-bordered" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Permission</th>
                                        <th>can-add</th>
                                        <th>can-edit</th>
                                        <th>can-delete</th>
                                        <th>can-view</th>
                                        <th>can-list</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Role</td>
                                    <td><input type="checkbox" name="name[role][can-add]" @if(isset($permissions['name']['role']['can-add']))checked @endif value="1"></td>
                                    <td><input type="checkbox" name="name[role][can-edit]" @if(isset($permissions['name']['role']['can-edit']))checked @endif value="1"></td>
                                    <td><input type="checkbox" name="name[role][can-delete]" @if(isset($permissions['name']['role']['can-delete']))checked @endif value="1"></td>
                                    <td><input type="checkbox" name="name[role][can-view]" @if(isset($permissions['name']['role']['can-view']))checked @endif value="1"></td>
                                    <td><input type="checkbox" name="name[role][can-list]" @if(isset($permissions['name']['role']['can-list']))checked @endif value="1"></td>
                                </tr>
                                <tr>
                                    <td>Permission</td>
                                    <td><input type="checkbox" name="name[permissions][can-add]" @if(isset($permissions['name']['permissions']['can-add']))checked @endif value="1"></td>
                                    <td><input type="checkbox" name="name[permissions][can-edit]" @if(isset($permissions['name']['permissions']['can-edit']))checked @endif value="1"></td>
                                    <td><input type="checkbox" name="name[permissions][can-delete]" @if(isset($permissions['name']['permissions']['can-delete']))checked @endif value="1"></td>
                                    <td><input type="checkbox" name="name[permissions][can-view]" @if(isset($permissions['name']['permissions']['can-view']))checked @endif value="1"></td>
                                    <td><input type="checkbox" name="name[permissions][can-list]" @if(isset($permissions['name']['permissions']['can-list']))checked @endif value="1"></td>
                                </tr>
                                <tr>
                                    <td>Pengaduan</td>
                                    <td><input type="checkbox" name="name[pengaduan][can-add]" @if(isset($permissions['name']['pengaduan']['can-add']))checked @endif value="1"></td>
                                    <td><input type="checkbox" name="name[pengaduan][can-edit]" @if(isset($permissions['name']['pengaduan']['can-edit']))checked @endif value="1"></td>
                                    <td><input type="checkbox" name="name[pengaduan][can-delete]" @if(isset($permissions['name']['pengaduan']['can-delete']))checked @endif value="1"></td>
                                    <td><input type="checkbox" name="name[pengaduan][can-view]" @if(isset($permissions['name']['pengaduan']['can-view']))checked @endif value="1"></td>
                                    <td><input type="checkbox" name="name[pengaduan][can-list]" @if(isset($permissions['name']['pengaduan']['can-list']))checked @endif value="1"></td>
                                </tr>
                                <tr>
                                    <td>Tanggapan</td>
                                    <td><input type="checkbox" name="name[tanggapan][can-add]" @if(isset($permissions['name']['role']['can-add']))checked @endif value="1"></td>
                                    <td><input type="checkbox" name="name[tanggapan][can-edit]" @if(isset($permissions['name']['role']['can-edit']))checked @endif value="1"></td>
                                    <td><input type="checkbox" name="name[tanggapan][can-delete]" @if(isset($permissions['name']['role']['can-delete']))checked @endif value="1"></td>
                                    <td><input type="checkbox" name="name[tanggapan][can-view]" @if(isset($permissions['name']['role']['can-view']))checked @endif value="1"></td>
                                    <td><input type="checkbox" name="name[tanggapan][can-list]" @if(isset($permissions['name']['role']['can-list']))checked @endif value="1"></td>
                                </tr>
                                <tr>
                                    <td>User</td>
                                    <td><input type="checkbox" name="name[user][can-add]" @if(isset($permissions['name']['role']['can-add']))checked @endif value="1"></td>
                                    <td><input type="checkbox" name="name[user][can-edit]" @if(isset($permissions['name']['role']['can-edit']))checked @endif value="1"></td>
                                    <td><input type="checkbox" name="name[user][can-delete]" @if(isset($permissions['name']['role']['can-delete']))checked @endif value="1"></td>
                                    <td><input type="checkbox" name="name[user][can-view]" @if(isset($permissions['name']['role']['can-view']))checked @endif value="1"></td>
                                    <td><input type="checkbox" name="name[user][can-list]" @if(isset($permissions['name']['role']['can-list']))checked @endif value="1"></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection
