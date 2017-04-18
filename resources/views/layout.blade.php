<!DOCTYPE html>
<html lang="en">
 <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">

     <title>@yield('tabTitle')</title>

     <!-- Fonts -->
     <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
     <link href="/stylesheets/custom.css" rel="stylesheet" type="text/css">
 </head>
 <body class="@yield('pageClass')">
     <header class="site-header">
        <div class="wrap clearfix">
            <div class="title-area">
                <a href="/"><img src="/images/chibi-head.png" width="100"></a>
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

     </footer>
     <script type="text/javascript" src="/js/custom.js"></script>
 </body>
</html>