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
            <form action="{{route('permiss.store')}}" method="post">
                @csrf
                <div class="card">
                    <div class="card-header">Tambah Permission</div>

                    <div class="card-body">
                        <div class="form-group">
                            <label>Nama Role</label>
                            <select name="role_id" class="form-control @error('role_id') is-invalid @enderror">
                                <option value="">Pilih Role</option>
                                @foreach(App\Models\Role::all() as $role)
                                <option value="{{$role->id}}">{{$role->name}}</option>
                                @endforeach

                                @error('role_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </select>
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
                                        <td><input type="checkbox" name="name[role][can-add]" value="1"></td>
                                        <td><input type="checkbox" name="name[role][can-edit]" value="1"></td>
                                        <td><input type="checkbox" name="name[role][can-delete]" value="1"></td>
                                        <td><input type="checkbox" name="name[role][can-view]" value="1"></td>
                                        <td><input type="checkbox" name="name[role][can-list]" value="1"></td>
                                    </tr>
                                    <tr>
                                        <td>Permission</td>
                                        <td><input type="checkbox" name="name[permission][can-add]" value="1"></td>
                                        <td><input type="checkbox" name="name[permission][can-edit]" value="1"></td>
                                        <td><input type="checkbox" name="name[permission][can-delete]" value="1"></td>
                                        <td><input type="checkbox" name="name[permission][can-view]" value="1"></td>
                                        <td><input type="checkbox" name="name[permission][can-list]" value="1"></td>
                                    </tr>
                                    <tr>
                                        <td>Pengaduan</td>
                                        <td><input type="checkbox" name="name[pengaduan][can-add]" value="1"></td>
                                        <td><input type="checkbox" name="name[pengaduan][can-edit]" value="1"></td>
                                        <td><input type="checkbox" name="name[pengaduan][can-delete]" value="1"></td>
                                        <td><input type="checkbox" name="name[pengaduan][can-view]" value="1"></td>
                                        <td><input type="checkbox" name="name[pengaduan][can-list]" value="1"></td>
                                    </tr>
                                    <tr>
                                        <td>Tanggapan</td>
                                        <td><input type="checkbox" name="name[tanggapan][can-add]" value="1"></td>
                                        <td><input type="checkbox" name="name[tanggapan][can-edit]" value="1"></td>
                                        <td><input type="checkbox" name="name[tanggapan][can-delete]" value="1"></td>
                                        <td><input type="checkbox" name="name[tanggapan][can-view]" value="1"></td>
                                        <td><input type="checkbox" name="name[tanggapan][can-list]" value="1"></td>
                                    </tr>
                                    <tr>
                                        <td>User</td>
                                        <td><input type="checkbox" name="name[user][can-add]" value="1"></td>
                                        <td><input type="checkbox" name="name[user][can-edit]" value="1"></td>
                                        <td><input type="checkbox" name="name[user][can-delete]" value="1"></td>
                                        <td><input type="checkbox" name="name[user][can-view]" value="1"></td>
                                        <td><input type="checkbox" name="name[user][can-list]" value="1"></td>
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
