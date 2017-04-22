@extends('layout')
@section('pageClass', 'home')
@section('tabTitle', 'About')
@section('content')

<section class="home__section home__section--cityscape">
    <h1>Hi, I'm Sean.</h1>
    <h2>a web developer</h2>
    <div class="skyline skyline--sunbox">
        <div class="sun-rays">
            <div class="the-sun"></div>
        </div>
    </div>
    <div class="skyline skyline--cloud-2"></div>
    <div class="skyline skyline--cloud-1"></div>
    <div class="skyline skyline--prlx-3"></div>
    {{--<div class="skyline skyline--balloons"></div>--}}
    <div class="skyline skyline--prlx-2"></div>
    <div class="skyline skyline--prlx-1"></div>
    <div class="skyline skyline--first"></div>
</section>
<section class="home__section">
     <div class="inside-container">

     </div>
</section>
<div class="white-ridges-up"></div>
<section class="home__section home__section--contact" id="contact">
     <div class="inside-container">
        @if(Session::has('success'))
            <div class="alert-success"> {{ Session::get('success') }} </div>
        @endif
        <h2>Want to get in touch?</h2>
        <form action="{{ url('/')  }}" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label name="email">Your Email:</label>
                <input name="email" id="email" class="form-control">
            </div>
            <div class="form-group">
                <label name="message">Your Message:</label>
                <textarea name="message" id="message" class="form-control"></textarea>
            </div>
            <input type="submit" value="Submit">
        </form>
     </div>
</section>
<div class="white-ridges-down"></div>
<script type="text/javascript" src="/js/parallax-background.js"></script>
 @stop