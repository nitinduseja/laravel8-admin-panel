@extends('layouts.admin')

@section('content')
    <h3 class="text-dark mb-4">Team</h3>
    <div class="card shadow">
        <div class="card-header py-3">
            <p class="text-primary m-0 fw-bold">Update User</p>
        </div>
        <div class="card-body">
            <form action="{{ route('users.update', $user->id) }}" method="post" class="row">
                @method('put')
                @csrf
                <div class="form-group col-md-6 mt-3">
                    <select name="role_id" class="form-control">
                        <option value="">Select Role</option>
                        <option value="1" {{$user->role->value == 'admin' ? 'selected' : ''}}>Admin</option>
                        <option value="2" {{$user->role->value == 'employee' ? 'selected' : ''}}>Employee</option>
                    </select>
                </div>
                <div class="form-group col-md-6 mt-3">
                    <input type="text" name="name" class="form-control  @error('name') is-invalid @enderror"
                        placeholder="Enter your name" value="{{$user->name}}">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group col-md-6 mt-3">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                        placeholder="Enter your email" value="{{$user->email}}">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group col-md-12 text-center mt-4">
                    <button class="btn btn-outline-dark col-md-2">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
