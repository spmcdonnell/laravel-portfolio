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
    <div class="skyline skyline--prlx-2"></div>
    <div class="skyline skyline--prlx-1"></div>
    <div class="skyline skyline--first"></div>
</section>
<section class="home__section">
     <div class="inside-container">
     </div>
</section>
<section class="home__section home__section--about">
    <div class="inside-container">
        <div class="row">
            <div class="col-sm-12">
                <div class="circle"></div>
                <h3 style="text-align: center; margin: 28px 0 16px;">Hi</h3>
                <p class="tighter" style="text-align: center;">I'm a Philadelphia based developer. I love
                creating for the web across devices, and am driven by an attention to detail, a love of problem
                solving, and a desire to continually expand my skill set.</p>
            </div>
        </div>
        <hr>
        <h2>What I can do.</h2>
        <div class="row tight">
            <div class="col-sm-4 col-sm-offset-1">
                <p><img src="/images/black-square.png" width="300" height="300"></p>
            </div>
            <div class="col-sm-6">
                <h3>How I work.</h3>
                <p>I have experience working on solo
                projects from conception to deployment as well as working as part of a team of
                talented developers and designers. I'm a Philadelphia based web developer. I'm a
                Philadelphia based web developer. Lorem ipsum dolor sit amet, consectetur
                adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna </p>
            </div>
        </div>
        <div class="row tight">
            <div class="col-sm-4 col-sm-push-7">
                <p><img src="/images/black-square.png" width="300" height="300"></p>
            </div>
            <div class="col-sm-6 col-sm-pull-3">
                <h3>What I use.</h3>
                <p>I'm a Philadelphia based web developer. I've worked with popular CMS platforms
                like Magento and Drupal, and have extensive Wordpress experience. Lorem ipsum dolor sit amet,
                consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                et dolore magna aliqua. I'm a Philadelphia based web developer. I'm a
                Philadelphia based web developer. Lorem ipsum dolor sit amet, consectetur
                adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna </p>
            </div>
        </div>
        <hr>
        <h2></h2>
    </div>
</section>
<section class="home__section home__section--skills">
     <div class="inside-container">

     </div>
</section>
{{--<div class="white-ridges-down"></div>--}}
<script type="text/javascript" src="/js/parallax-background.js"></script>
 @stop