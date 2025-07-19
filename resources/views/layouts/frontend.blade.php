<!DOCTYPE html>
<html lang="vi">
<head>
    @include('partials.head')
    @yield('head')
</head>
<body class="body1">
<div class="paginacontainer"> 

<div class="progress-wrap">
  <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
    <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
  </svg>
</div>

</div> 

<div class="preloader10">
   <!-- Preloader -->
<div id="preloader">
   <!-- Progress Bar at Top -->
   <div class="progress-bar"></div>
   <!-- Title Logo in Center with Rotation -->
   <div class="title-logo">
     <img src="assets/img/logo/preloader-icon1.png" alt="SEO Marketing Logo">
   </div>
 </div>
</div>

<!--=====PRELOADER END=======-->
    @include('partials.header')
    @yield('header')
    <main>
        @yield('content')
    </main>
    @include('partials.footer')
    @yield('footer')
    @include('partials.scripts')
    @yield('scripts')
</body>
</html> 