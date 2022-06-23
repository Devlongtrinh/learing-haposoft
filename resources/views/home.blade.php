@extends ('layouts.app')

@section('content')

<section class="banner">
    <div class="bg-banner"></div>
    <div class="content">
        <div class="slogan-first">
            Learn Anytime, Anywhere <br>
            <span> at HapoLearn <img src="{{ asset('images/Group_6.png') }}" class="bg-img" alt="">!</span>
        </div>
        <p class="slogan-second">
            Interactive lessons, "on-the-go" <br>
            practice, peer support.
        </p>
        <button class="button">
            Start Learning Now </button>
    </div>
</section>
@endsection
