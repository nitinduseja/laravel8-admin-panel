@extends('layouts.admin')

@section('content')
    <h3 class="text-dark mb-4">Role</h3>
    <div class="card shadow">
        <div class="card-header py-3">
            <p class="text-primary m-0 fw-bold">Preview Role</p>
        </div>
        <div class="card-body row">
            <div class="form-group col-md-6 mt-3">
                <input type="text" name="name" class="form-control" placeholder="Enter your name"
                    value="{{ $role->name }}" readonly>
            </div>
            <div class="form-group col-md-6 mt-3">
                <input type="text" name="value" class="form-control" placeholder="Enter your value"
                    value="{{ $role->value }}" readonly>
            </div>
        </div>
    </div>
@endsection
