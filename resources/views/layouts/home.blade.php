<!DOCTYPE html>
<html lang="{{LaravelLocalization::getCurrentLocale()}}" dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}">

@include('includes.head')

<body>
<div class="hero_area">

@include('includes.header')
@include('includes.slider')

  </div>

  
  @include('includes.about')
  
  @include('includes.service')


  @include('includes.client')

  @include('includes.contact')

  @include('includes.team')
  @include('includes.info')
 

  
  @include('includes.footer')



  
</body>

</html>