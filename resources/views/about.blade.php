@extends('layout')
@section('pageClass', 'home')
@section('tabTitle', 'Sean McDonnell - About')
@section('content')

<section class="home__section home__section--cityscape section blah-blah-blah">
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
<section class="home__section home__section--grass">
    <div class="inside-container">
    </div>
</section>
<section id="home__section--about" class="home__section home__section--about section blah-blah-blah">
    <div class="inside-container">
        <div class="row">
            <div class="col-sm-12">
                <div class="circle"><img src="/images/sean-avatar.png" style="width: 90px; margin-top: 2px;"></div>
                <h3 style="text-align: center; margin: 28px 0 16px;">Hi</h3>
                <p class="tighter" style="text-align: center;">I'm a Philadelphia based developer who enjoys
                    creating for the web across devices. I'm driven by a love of problem solving, an attention to
                    detail,
                    and a desire to continually improve my skills.</p>
            </div>
        </div>
        <hr>
        <h2>What I can do.</h2>
        <div class="row tight">
            <div class="col-sm-4 col-sm-offset-1">
                <p style="text-align: center"><img src="/images/problem-solving.png" width="450" height="411"
                        style="max-width: 270px; margin-top: 26px;"></p>
            </div>
            <div class="col-sm-6">
                <h3>Adapt to meet your needs.</h3>
                <p>I have experience working on solo projects from conception to deployment as well as part of a team of
                    talented developers and designers. I keep apprised of the latest trends and understand
                    the importance of good design in shaping user browsing habits. When not hunkered over my computer, I
                    also enjoy
                    working with clients to help them realize their vision.</p>
            </div>
        </div>
        <div class="row tight">
            <div class="col-sm-4 col-sm-push-7" style="padding: 0;">
                <p style="text-align: center"><img src="/images/tool-for-job-js.png" width="450" height="386"
                        style="width: 350px;"></p>
            </div>
            <div class="col-sm-6 col-sm-pull-3">
                <h3>Use the right tool for the job.</h3>
                <p>With strong fundamentals in HTML, CSS, and JS, I also love working within the JS ecosystem through
                    Node and React. I have experience with SQL databases and PHP, and have done extensive custom work
                    with popular CMS platforms like Magento and WordPress. Tools like webpack help keep me efficient. On
                    the design side I'm joined at the hip with Adobe Photoshop and Illustrator.</p>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-12">
                <h2>I can help.</h2>
                <h3 style="text-align: center; margin-bottom: 30px;">I'm available for hire and freelance opportunities.
                </h3>
                <p class="tighter" style="text-align: center;">If you have a project in mind that you think I may be
                    able to help you with, or if you'd like
                    to get in touch for any other reason, let's talk!</p>
            </div>
        </div>
        <h2></h2>
    </div>
</section>
<script type="text/javascript" src="/js/parallax-background.min.js"></script>
@stop