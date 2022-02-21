@extends('layouts.admin')

@section('content')
    <h3 class="text-dark mb-4">Notification</h3>
    <div class="card shadow">
        <div class="card-header py-3">
            <p class="text-primary m-0 fw-bold">Update Notification</p>
        </div>
        <div class="card-body">
            <form action="{{ route('notifications.update', $role->id) }}" method="post" class="row">
                @csrf
                @method('put')
                <div class="form-group col-md-6 mt-3">
                    <input type="text" name="content" class="form-control  @error('content') is-invalid @enderror"
                        placeholder="Enter your content" value="{{$role->content}}">
                    @error('content')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group col-md-6 mt-3">
                    <select name="type">
                        <option value="">Select Type</option>
                        <option value="info">Info</option>
                        <option value="success">Success</option>
                        <option value="danger">Danger</option>
                    </select>
                    @error('type')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group col-md-6 mt-3">
                    <select name="user_id">
                        <option value="">Select User</option>
                        <option value="info">Info</option>
                    </select>
                    @error('user_id')
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
