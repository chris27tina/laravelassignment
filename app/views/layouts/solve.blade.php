<!DOCTYPE HTML>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf8" />

 @yield('head')

  
 <body>

    <div class="container" style="position: relative;min-height: 440px; margin-top:5%; margin-bottom:5%;">
    
      @yield('main')
    </div>
    <footer style="background-color:#298A08;">
      @include('partials.footer')
    </footer>
    
  </body>

</html>