<!DOCTYPE HTML>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf8" />

@yield('css') 
<!-- {{ HTML::style('/assets/css/show.css') }} -->

@include('partials.header')
 <body style="background:#fff;">
    
    <div class="container">
      @if (Session::has('message'))
        <div class="flash alert">
          <p>{{ Session::get('message') }}</p>
        </div>
      @endif

      @yield('main')
    </div>
    <footer style="background-color:#298A08;">
      @include('partials.footer')
    </footer>
  </body>
  
  @yield('css')  

</html>