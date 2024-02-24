<!DOCTYPE html>
<html lang="en">
   <head>
    @include('Home.homeCSS')
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
         @include('Home.header')
         <!-- banner section start -->
            @include('Home.banner')
         <!-- banner section end -->
      </div>
      <!-- header section end -->
      <!-- services section start -->
      @include('Home.service')
      <!-- services section end -->
      <!-- about section start -->
      @include('Home.about')
      <!-- about section end -->
      
      <!-- footer section start -->
      
      <!-- footer section end -->
      @include('Home.footer')
</html>