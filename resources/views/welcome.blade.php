@extends('layouts.app')
@section('content')
    <div class="container-fluid px-4 py-5 my-5 text-center">
        <div class="lc-block mb-4">
            <div editable="rich">
                <h2 class="display-2 fw-bold">Level up your <span class="text-primary">Admin Panel!</span></h2>
            </div>
        </div>
        <div class="lc-block col-lg-6 mx-auto mb-5">
            <div editable="rich">
                <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap</p>
            </div>
        </div>

        <div class="lc-block d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
            @auth
                <a class="btn btn-primary btn-lg px-4 gap-3" href="{{ route('home') }}" role="button">Go To Dashboard</a>
            @else
                <a class="btn btn-primary btn-lg px-4 gap-3" href="{{ route('login') }}" role="button">Login</a>
                <a class="btn btn-outline-secondary btn-lg px-4" href="{{ route('register') }}" role="button">Register</a>
            @endauth
        </div>
        <div class="lc-block d-grid gap-2 d-sm-flex justify-content-sm-center">
            <img class="img-fluid"
                src="https://library.livecanvas.com/starters/wp-content/uploads/sites/15/2021/10/undraw_going_up_ttm5.svg"
                width="450" height="553" srcset="" sizes="" alt="">
        </div>
    </div>
@endsection
