@php
$role = auth()->user()->role->value;
@endphp
@extends("layouts.$role")

@section('content')
    <h3 class="text-dark mb-4">Profile</h3>
    <div class="card shadow">
        <div class="card-header py-3 d-flex justify-content-between">
            <p class="text-primary m-0 fw-bold">Profile Info</p>
        </div>
        <div class="card-body">
            <div class="main-body">
                <div class="row gutters-sm">
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-column align-items-center text-center"><img class="rounded-circle"
                                        src="{{ url('https://ui-avatars.com/api/?name=' . $user->name . '&rounded=true&background=random') }}"
                                        alt="Admin" width="150" />
                                    <div class="mt-3">
                                        <h4>{{ $user->name }}</h4>
                                        <p class="text-secondary mb-1">Full Stack Developer</p>
                                        <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p>
                                        <button class="btn btn-primary">Follow</button>
                                        <button class="btn btn-outline-primary">Message</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mt-3">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <h6 class="mb-0"><svg class="feather feather-globe mr-2 icon-inline"
                                            width="24" height="24" viewBox="0 0 24 24">
                                            <path
                                                d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z">
                                            </path>
                                        </svg>Website</h6><span class="text-secondary">https://bootdey.com</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <h6 class="mb-0">
                                        <svg class="feather feather-github mr-2 icon-inline" width="24" height="24"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22">
                                            </path>
                                        </svg>
                                        Github
                                    </h6>
                                    <span class="text-secondary">bootdey</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <h6 class="mb-0">
                                        <svg class="feather feather-twitter mr-2 icon-inline text-info" width="24"
                                            height="24" viewBox="0 0 24 24">
                                            <path
                                                d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z">
                                            </path>
                                        </svg>
                                        Twitter
                                    </h6>
                                    <span class="text-secondary">@bootdey</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <h6 class="mb-0">
                                        <svg class="feather feather-instagram mr-2 icon-inline text-danger" width="24"
                                            height="24" viewBox="0 0 24 24">
                                            <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                        </svg>
                                        Instagram
                                    </h6>
                                    <span class="text-secondary">bootdey</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <h6 class="mb-0">
                                        <svg class="feather feather-facebook mr-2 icon-inline text-primary" width="24"
                                            height="24" viewBox="0 0 24 24">
                                            <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z">
                                            </path>
                                        </svg>
                                        Facebook
                                    </h6>
                                    <span class="text-secondary">bootdey</span>
                                </li>
                            </ul>
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
                                        {{ $user->name }}
                                    </div>
                                </div>
                                <hr />
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Email</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        {{ $user->email }}
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
                                    <div class="col-sm-12"><a class="btn btn-outline-primary " target="__blank" href="javascript:void(0)">Edit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row gutters-sm">
                            <div class="col-sm-6 mb-3">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <h6 class="d-flex align-items-center mb-3">
                                            Project Status
                                        </h6>
                                        <small>Web Design</small>
                                        <div class="progress mb-3" style="height: 5px;">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 80%;">
                                            </div>
                                        </div>
                                        <small>Website Markup</small>
                                        <div class="progress mb-3" style="height: 5px;">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 72%;">
                                            </div>
                                        </div>
                                        <small>One Page</small>
                                        <div class="progress mb-3" style="height: 5px;">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 89%;">
                                            </div>
                                        </div>
                                        <small>Mobile Template</small>
                                        <div class="progress mb-3" style="height: 5px;">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 55%;">
                                            </div>
                                        </div>
                                        <small>Backend API</small>
                                        <div class="progress mb-3" style="height: 5px;">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 66%;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 mb-3">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <h6 class="d-flex align-items-center mb-3">
                                            Project Status
                                        </h6>
                                        <small>Web Design</small>
                                        <div class="progress mb-3" style="height: 5px;">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 80%;">
                                            </div>
                                        </div>
                                        <small>Website Markup</small>
                                        <div class="progress mb-3" style="height: 5px;">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 72%;">
                                            </div>
                                        </div>
                                        <small>One Page</small>
                                        <div class="progress mb-3" style="height: 5px;">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 89%;">
                                            </div>
                                        </div>
                                        <small>Mobile Template</small>
                                        <div class="progress mb-3" style="height: 5px;">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 55%;">
                                            </div>
                                        </div>
                                        <small>Backend API</small>
                                        <div class="progress mb-3" style="height: 5px;">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 66%;">
                                            </div>
                                        </div>
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
