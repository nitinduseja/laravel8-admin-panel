@extends('layouts.admin')

@section('content')
<h3 class="text-dark mb-4">Team</h3>
<div class="card shadow">
    <div class="card-header py-3">
        <p class="text-primary m-0 fw-bold">User Preview</p>
    </div>
    <div class="card-body">
        <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center"><img class="rounded-circle" src="{{ url('https://ui-avatars.com/api/?name=' . $user->name . '&rounded=true&background=random') }}" alt="Admin" width="150" />
                            <div class="mt-3">
                                <h4>{{$user->name}}</h4>
                                <p class="text-secondary mb-1">Full Stack Developer</p>
                                <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p>
                                <button class="btn btn-primary">Follow</button>
                                <button class="btn btn-outline-primary">Message</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Full Name</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{$user->name}}
                            </div>
                        </div>
                        <hr />
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Email</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{$user->email}}
                            </div>
                        </div>
                        <hr />
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Phone</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                (239) 816-9029
                            </div>
                        </div>
                        <hr />
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Mobile</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                (320) 380-4539
                            </div>
                        </div>
                        <hr />
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Address</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                Bay Area, San Francisco, CA
                            </div>
                        </div>
                        <hr />
                        <div class="row">
                            <div class="col-sm-12"><a class="btn btn-outline-primary" href="{{route('users.edit', $user->id)}}">Edit</a></div>
                        </div>
                    </div>
                </div>
                <div class="row gutters-sm">
                    <div class="col-sm-6 mb-3">
                        <div class="card h-100">
                            <div class="card-body">
                                <h6 class="d-flex align-items-center mb-3">
                                    <i class="material-icons text-info mr-2"></i>Project Status
                                </h6>
                                <small>Web Design</small>
                                <div class="progress mb-3" style="height: 5px;">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 80%;"></div>
                                </div>
                                <small>Website Markup</small>
                                <div class="progress mb-3" style="height: 5px;">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 72%;"></div>
                                </div>
                                <small>One Page</small>
                                <div class="progress mb-3" style="height: 5px;">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 89%;"></div>
                                </div>
                                <small>Mobile Template</small>
                                <div class="progress mb-3" style="height: 5px;">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 55%;"></div>
                                </div>
                                <small>Backend API</small>
                                <div class="progress mb-3" style="height: 5px;">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 66%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-3">
                        <div class="card h-100">
                            <div class="card-body">
                                <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">
                                    </i>Project Status
                                </h6>
                                <small>Web Design</small>
                                <div class="progress mb-3" style="height: 5px;">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 80%;"></div>
                                </div>
                                <small>Website Markup</small>
                                <div class="progress mb-3" style="height: 5px;">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 72%;"></div>
                                </div>
                                <small>One Page</small>
                                <div class="progress mb-3" style="height: 5px;">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 89%;"></div>
                                </div>
                                <small>Mobile Template</small>
                                <div class="progress mb-3" style="height: 5px;">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 55%;"></div>
                                </div>
                                <small>Backend API</small>
                                <div class="progress mb-3" style="height: 5px;">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 66%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
