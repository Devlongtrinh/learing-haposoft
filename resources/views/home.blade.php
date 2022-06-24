@extends('layouts.app')

@section('content')

<section class="example">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>
                    <div class="card-body">
                        Hello World!!!
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container main">
    <div class="row row-cols-1 row-cols-xs-1 row-cols-sm-1 row-cols-md-1 row-cols-xl-3 g-4">
        <div class="col">
            <div class="card h-100">
                <div class="card-img-left">
                    <img src="{{ asset('images/html.png') }}" class="card-img-top" alt="...">
                </div>
                <div class="card-body">
                    <h5 class="card-title">HTML/CSS/js Tutorial</h5>
                    <p class="card-text">
                        I knew hardly anything about HTML, JS, and CSS before entering New Media.
                        I had coded quite a bit, but never touched anything in regards to web development.
                    </p>
                    <div class="button button-success">
                        <a href="#">take this course</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <div class="card-img-center">
                    <img src="{{ asset('images/laravel.png') }}" class="card-img-top" alt="...">
                </div>
                <div class="card-body">
                    <h5 class="card-title">LARAVEL Tutorial</h5>
                    <p class="card-text">
                        I knew hardly anything about HTML, JS, and CSS before entering New Media.
                        I had coded quite a bit, but never touched anything in regards to web development.
                    </p>
                    <div class="button button-success">
                        <a href="#">take this course</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <div class="card-img-right">
                    <img src="{{ asset('images/php.png') }}" class="card-img-top" alt="...">
                </div>
                <div class="card-body">
                    <h5 class="card-title">PHP Tutorial</h5>
                    <p class="card-text">
                        I knew hardly anything about HTML, JS, and CSS before entering New Media.
                        I had coded quite a bit, but never touched anything in regards to web development.
                    </p>
                    <div class="button button-success">
                        <a href="#">take this course</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="heading-courses">Other courses</div>
    <div class="row row-cols-1 row-cols-xs-1 row-cols-sm-1 row-cols-md-1 row-cols-xl-3 g-4">
        <div class="col">
            <div class="card h-100">
                <div class="card-img-left-bot">
                    <img src="{{ asset('images/css.png') }}" class="card-img-top" alt="...">
                </div>
                <div class="card-body">
                    <h5 class="card-title">CSS Tutorial</h5>
                    <p class="card-text">
                    I knew hardly anything about HTML, JS, and CSS before entering New Media,...
                    </p>
                    <div class="button button-success">
                        <a href="#">take this course</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <div class="card-img-center-bot ">
                    <img src="{{ asset('images/rails.png') }}" class="card-img-top card-rail" alt="...">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Ruby on rails Tutorial</h5>
                    <p class="card-text">
                    I knew hardly anything about HTML, JS, and CSS before entering New Media,...
                    </p>
                    <div class="button button-success">
                        <a href="#">take this course</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <div class="card-img-right-bot">
                    <img src="{{ asset('images/java.png') }}" class="card-img-top" alt="...">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Java Tutorial</h5>
                    <p class="card-text">
                    I knew hardly anything about HTML, JS, and CSS before entering New Media,...
                    </p>
                    <div class="button button-success">
                        <a href="#">take this course</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="course-footer">
        <span class="course-text">View all our course</span>
        <i class="fa-solid fa-arrow-right-long"></i>
    </div>
</div>

@endsection
