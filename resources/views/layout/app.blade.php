<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/images/slide03.jpg') }}">
         <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
         
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

        <title>{{ config('app.name') }} {{ '||' }} {{ 'We are in the business of
           building capabilities for our clients' }}</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  </head>
  <body onload="myFunction()"> 
    <div class="wrapper" style="display:none;" id="myDiv">
      @yield('content') 
       <button class="btn btn-light" onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-arrow-up" aria-hidden="true"></i></button>

    </div>
    <div  id="loader" class="loader loader--style4" title="3">
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
     width="24px" height="24px" viewBox="0 0 24 24" style="enable-background:new 0 0 50 50;" xml:space="preserve">
         <rect x="0" y="0" width="4" height="7" fill="#333">
            <animateTransform  attributeType="xml"
        attributeName="transform" type="scale"
        values="1,1; 1,3; 1,1"
        begin="0s" dur="0.6s" repeatCount="indefinite" />
         </rect>

        <rect x="10" y="0" width="4" height="7" fill="#333">
            <animateTransform  attributeType="xml"
        attributeName="transform" type="scale"
        values="1,1; 1,3; 1,1"
        begin="0.2s" dur="0.6s" repeatCount="indefinite" />
        </rect>
        <rect x="20" y="0" width="4" height="7" fill="#333">
          <animateTransform  attributeType="xml"
        attributeName="transform" type="scale"
        values="1,1; 1,3; 1,1"
        begin="0.4s" dur="0.6s" repeatCount="indefinite" />
        </rect>
      </svg>
      <p>Loading site wait....</p>
    </div>





    <script>
    var myVar;

    function myFunction() {
      myVar = setTimeout(showPage, 1000);
    }

    function showPage() {
      document.getElementById("loader").style.display = "none";
      document.getElementById("myDiv").style.display = "block";
    }
    </script>





   <script type="text/javascript">
            function closed() {
                document.getElementById('close').style.display='none';
                    }
    </script>

    <script> 
    var mybutton = document.getElementById("myBtn");
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
      } else {
        mybutton.style.display = "none";
      }
    }

    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0; 
 

 
    }
    </script>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 3000); // Change image every 2 seconds
}
</script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>


  <script type="text/javascript">
    

  var welcome = $("#team");
  var services = $("#services");
  var contact = $("#contact");
  var navbarStartLink=$("#navbar-start-link")
  var navbarHomeLink = $("#navbar-team-link");
  var navbarServicesLink = $("#navbar-services-link");
  var navbarContactLink = $("#navbar-contact-link");

    navbarStartLink.click(function() {
    navbarHomeLink.parent().removeClass("active");
    navbarStartLink.parent().addClass("active");
    navbarServicesLink.parent().removeClass("active");
    navbarContactLink.parent().removeClass("active");
  });

    navbarHomeLink.click(function() {
    navbarHomeLink.parent().addClass("active");
    navbarStartLink.parent().removeClass("active");
    navbarServicesLink.parent().removeClass("active");
    navbarContactLink.parent().removeClass("active");
  });

  navbarServicesLink.click(function() {
    navbarStartLink.parent().removeClass("active");
    navbarHomeLink.parent().removeClass("active");
    navbarServicesLink.parent().addClass("active");
    navbarContactLink.parent().removeClass("active");
  });
  navbarContactLink.click(function() {
    navbarStartLink.parent().removeClass("active");
    navbarHomeLink.parent().removeClass("active");
    navbarServicesLink.parent().removeClass("active");
    navbarContactLink.parent().addClass("active");
  });

  </script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/CSSRulePlugin.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/Draggable.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/EaselPlugin.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/MotionPathPlugin.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/PixiPlugin.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/TextPlugin.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/ScrollToPlugin.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/ScrollTrigger.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/EasePack.min.js"></script>

 
  </body>
</html>
