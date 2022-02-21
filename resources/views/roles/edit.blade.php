@extends('layouts.admin')

@section('content')
    <h3 class="text-dark mb-4">Role</h3>
    <div class="card shadow">
        <div class="card-header py-3">
            <p class="text-primary m-0 fw-bold">Update Role</p>
        </div>
        <div class="card-body">
            <form action="{{ route('roles.update', $role->id) }}" method="post" class="row">
                @csrf
                @method('put')
                <div class="form-group col-md-6 mt-3">
                    <input type="text" name="name" class="form-control  @error('name') is-invalid @enderror"
                        placeholder="Enter your name" value="{{$role->name}}">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group col-md-6 mt-3">
                    <input type="text" name="value" class="form-control @error('value') is-invalid @enderror"
                        placeholder="Enter your value" value="{{$role->value}}">
                    @error('value')
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
