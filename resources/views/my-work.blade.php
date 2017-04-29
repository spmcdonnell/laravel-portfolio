@extends('layout')
@section('pageClass', 'my-work')
@section('tabTitle', 'My Work')
@section('content')

<section class="my-work__section my-work__section--hero">

</section>
<section class="my-work__section my-work__section--1 my-work__section--edwrks">
    <div class="clearfix">
        <div class="static static1">
            <div class="desc">
                <h2>EducationWorks</h2>
                <h3>Web Dev / UI</h3>
                 <p>I worked on the site redesign of Philadelphia based non-profit EducationWorks.
                 The primary goals were to creative an attractive, modern, mobile-friendly design, and
                 reduce the number of pages through a tabbed content interface.</p>
                 <a class="see-more" href="http://educationworks.org">Take a Look</a>
            </div>
        </div>
        <div class="scroll-content">
            <div>
                <div style="position: relative; display: inline-block">
                    <img src="/images/educationworks-homepage.jpg">
                    <img class="mobile" width="150" src="/images/eduwo-phone.png">
                </div>
            </div>
            <img style="margin-top: 40px;" src="/images/educationworks-get-involved.jpg">
        </div>
    </div>
</section>
<section class="my-work__section my-work__section--2 my-work__section--elevate">
    <div class="clearfix">
        <div class="static static2">
            <div class="desc">
                <h2>Elevate CBD</h2>
                <h3>Web Design / UI</h3>
                 <p>Elevate CBD </p>
                </p>
                <a class="see-more" href="#">See More</a>
            </div>
        </div>
        <div class="scroll-content">
            <img src="/images/elevatecbd-homepage.jpg">
        </div>
    </div>
</section>
<section class="my-work__section my-work__section--3 my-work__section--homestead">
    <div class="clearfix">
        <div class="static static3">
            <div class="desc">
                <h2>The Homestead Box</h2>
                <h3>Web Design / UI</h3>
                 <p>The Homesteadbox offers a subscription service dedicated to self sufficiency
                 in addition to regular newsletter and video based tutorials. Care was taken to keep
                 the messaging simple and provide ample opportunities to sign up.</p>
                <a class="see-more" href="http://thehomesteadbox.com">Take a Look</a>
            </div>
        </div>
        <div class="scroll-content">
            <img src="/images/thehomesteadbox-homepage.jpg">
        </div>
    </div>
</section>
<section class="my-work__section my-work__section--4 my-work__section--skinny">
    <div class="clearfix">
        <div class="static static4">
            <div class="desc">
                <h2>Skinny Nutritional</h2>
                <h3>Web Design / UI</h3>
                 <p>A Magento based e-commerce site for a startup brand, this project has a community focus
                 through blog posts and customer interaction with coaches and trainers. </p>
                <a class="see-more" href="http://skinnyco.com">Take a Look</a>
            </div>
        </div>
        <div class="scroll-content">
            <div class="height-fix">
                <img src="/images/skinny-homepage.jpg">
            </div>
        </div>
    </div>
</section>
<section class="my-work__section my-work__section--5 my-work__section--concept-art">
    <div class="clearfix">
        <div class="static static5">
            <div class="desc">
                <h2>Concept Art</h2>
                <h3>Product Development / Design</h3>
                <p>I created these two iterations of concept art for a household product designed to
                hold and disinfect a kitchen sponge after every use.</p>
            </div>
        </div>
        <div class="scroll-content">
            <div class="height-fix">
                <img src="/images/sponge-cleaner-final.jpg">
                <img style="margin-top: 40px;" src="/images/sponge-cleaner.jpg">
            </div>
        </div>
    </div>
</section>

<script type="text/javascript" src="/js/scripts.js"></script>
@stop