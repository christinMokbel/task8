<!DOCTYPE html>
<html lang="{{LaravelLocalization::getCurrentLocale()}}" dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}">

@include('includes.head')

<body class="sub_page" >
<div class="hero_area">

@include('includes.header')


  </div>

  @yield('content')
  @include('includes.info')
 

  
 @include('includes.footer')



 
</body>

</html>