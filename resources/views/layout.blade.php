<!DOCTYPE html>
<html lang="en">
 <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">

     <title>@yield('tabTitle')</title>

     <!-- Fonts -->
     <link rel='shortcut icon' href="/images/favicon.ico" type="image/x-icon" />
     <link href="https://fonts.googleapis.com/css?family=Lato:100,300" rel="stylesheet">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
     <link href="/stylesheets/custom.css" rel="stylesheet" type="text/css">
     <link href="/stylesheets/grid12.min.css" rel="stylesheet" type="text/css">
 </head>
 <body class="@yield('pageClass')">
     <header class="site-header">
        <div class="wrap clear-fix">
            <div class="title-area">
                <a href="/"><div id="temp"><img src="/images/sean-avatar.png" style="width: 57px; margin-top: 2px;"></div></a>
            </div>
            <div class="primary-nav">
                <ul>
                    <li><a href="/">About</a></li>
                    <li><a href="/my-work">Work</a></li>
                </ul>
            </div>
        </div>
     </header>
     <div class="site-inner">
         <main class="content">
            @yield('content')
         </main>
     </div>
     <footer>
        <div class="wrap" id="contact">
             <div class="inside-container">
                 <div class="row">
                    @if(Session::has('success'))
                        <div class="alert-success"> {{ Session::get('success') }} </div>
                    @endif
                    <div class="col-sm-4">
                        <h2>About this site:</h2>
                        <p>This site was created using Laravel 5 and has been my pet project
                        for a number months. When deciding to overhaul my portfolio site,
                        I wanted to keep things simple and functional, but still visually interesting.
                        It's also served as an opportunity to improve my knowledge of Laravel.
                        I plan to make to regular updates and improvements,
                        and hope to add a blog in the near future.</p>
                    </div>
                    <div class="col-sm-4" style="text-align: center; position: initial;">
                        <div class="circle" style="margin: 25px auto 55px;"><img src="/images/sean-avatar.png" style="width: 90px; margin-top: 2px;"></div>
                        <div class="vertical">
                            <a href="tel:2677724490"><img style="display: inline; margin: 0 10px -7px;" src="/images/phone-icon.png" width="19" height="25"></a><a href="tel:2677724490">267-772-4490</a>
                            <div style="height: 25px;"></div>
                            <a href="mailto:mcdsean@gmail.com"><img style="display: inline; margin: 0 10px -4px;" src="/images/email-icon.png" width="30" height="20"></a><a href="mailto:mcdsean@gmail.com">mcdsean@gmail.com</a>
                        </div>
                    </div>
                    <div class="col-sm-4">
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
                 </div>
             </div>
        </div>
     </footer>
     <script type="text/javascript" src="/js/custom.min.js"></script>
     {{--<script type="text/javascript" src="/js/nicescroll/jquery.nicescroll.min.js"></script>--}}
 </body>
</html>