@extends('layouts.admin')

@section('content')
    <h3 class="text-dark mb-4">Team</h3>
    <div class="card shadow">
        <div class="card-header py-3">
            <p class="text-primary m-0 fw-bold">Create User</p>
        </div>
        <div class="card-body">
            <form action="{{ route('users.store') }}" method="post" class="row">
                @csrf
                <div class="form-group col-md-6 mt-3">
                    <select name="role_id" class="form-control">
                        <option value="">Select Role</option>
                        <option value="1" {{old('role') == 'admin' ? 'selected' : ''}}>Admin</option>
                        <option value="2" {{old('role') == 'employee' ? 'selected' : ''}}>Employee</option>
                    </select>
                </div>
                <div class="form-group col-md-6 mt-3">
                    <input type="text" name="name" class="form-control  @error('name') is-invalid @enderror"
                        placeholder="Enter your name" value="{{old('name')}}">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group col-md-6 mt-3">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                        placeholder="Enter your email" value="{{old('email')}}">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group col-md-6 mt-3">
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Enter your password">
                    @error('password')
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
