@extends('layouts.admin')

@section('content')
    <h3 class="text-dark mb-4">Notification</h3>
    <div class="card shadow">
        <div class="card-header py-3 d-flex justify-content-between">
            <p class="text-primary m-0 fw-bold">Notification Info</p>
            <a href="{{ route('notifications.create') }}" class="btn btn-primary">Create Notification</a>
        </div>
        <div class="card-body">
            <form action="" method="get" id="filter-form">
                <div class="row">
                    <div class="col-md-6 text-nowrap">
                        <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable">
                            <label class="form-label">Show
                                &nbsp;
                                <select name="limit" class="d-inline-block form-select form-select-sm"
                                    onchange="document.getElementById('filter-form').submit();">
                                    <option value="10" {{ request('limit') === '10' ? 'selected' : '' }}>10</option>
                                    <option value="25" {{ request('limit') === '25' ? 'selected' : '' }}>25</option>
                                    <option value="50" {{ request('limit') === '50' ? 'selected' : '' }}>50</option>
                                    <option value="100" {{ request('limit') === '100' ? 'selected' : '' }}>100</option>
                                </select>
                                &nbsp;
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="text-md-end dataTables_filter" id="dataTable_filter">
                            <label class="form-label">
                                <input type="text" name="search" value="{{ request('search') ?? '' }}"
                                    class="form-control form-control-sm" aria-controls="dataTable" placeholder="Search">
                            </label>
                        </div>
                    </div>
                </div>
            </form>
            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                <table class="table my-0" id="dataTable">
                    <thead>
                        <tr>
                            <th>User</th>
                            <th>Notification</th>
                            <th>Type</th>
                            <th>Is Read</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($notifications as $notification)
                            <tr>
                                <td>{{ $notification->user_id ? $notification->user->name : 'All' }}</td>
                                <td>{{ $notification->content }}</td>
                                <td>{{ $notification->type }}</td>
                                <td>{{ $notification->is_read ? 'Yes' : 'No' }}</td>
                                <td>{{ $notification->created_at->format('Y-m-d') }}</td>
                                <td>
                                    <a href="{{ route('notifications.show', $notification->id) }}">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ route('notifications.edit', $notification->id) }}" class="text-success">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a class="text-danger" href="javascript:void(0)"
                                        onclick="document.getElementById('deleteNotification').action = '{{ route('notifications.destroy', $notification->id) }}'"
                                        data-bs-toggle="modal" data-bs-target="#confirmDeleteModal">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td>No Data Available</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="row">
                <div class="col-md-6 align-self-center">
                    <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">
                        Showing 1 to {{ $notifications->count() }} of {{ $notifications->total() }}</p>
                </div>
                <div class="col-md-6">
                    <div class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                        {{ $notifications->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Confirm Delete Modal -->
    <div class="modal fade" id="confirmDeleteModal" tabindex="-1" aria-labelledby="confirmDeleteModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmDeleteModalLabel">Delete</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="post" id="deleteNotification">
                    @method('delete')
                    @csrf
                    <div class="modal-body">
                        Are you sure you want to delete this role?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
