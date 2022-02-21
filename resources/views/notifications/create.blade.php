@extends('layouts.admin')

@section('content')
    <h3 class="text-dark mb-4">Notification</h3>
    <div class="card shadow">
        <div class="card-header py-3">
            <p class="text-primary m-0 fw-bold">Create Notification</p>
        </div>
        <div class="card-body">
            {{-- {{dd($errors)}} --}}
            <form action="{{ route('notifications.store') }}" method="post" class="row">
                @csrf
                <input type="hidden" name="mode" value="add">
                <div class="form-group col-md-6 mt-3">
                    <textarea name="content" placeholder="Enter Notification" class="form-control  @error('content') is-invalid @enderror">{{old('content')}}</textarea>
                    @error('content')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group col-md-6 mt-3">
                    <select name="type" class="form-control">
                        <option value="">Select Type</option>
                        <option value="info" {{ old('type') == 'info' ? 'selected' : '' }}>Info</option>
                        <option value="success" {{ old('type') == 'success' ? 'selected' : '' }}>Success</option>
                        <option value="danger" {{ old('type') == 'danger' ? 'selected' : '' }}>Danger</option>
                    </select>
                    @error('type')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group col-md-6 mt-3">
                    <select name="user_id" class="form-control">
                        <option value="">Select User</option>
                        @foreach ($users as $user)
                        <option value="{{$user->id}}" {{ old('user_id') == $user->id ? 'selected' : '' }}>{{$user->name}}</option>
                        @endforeach
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
