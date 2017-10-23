<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Ting Diamond</title>

        <!-- Fonts -->
       
        <link rel="stylesheet" type="text/css" href="{{mix('css/app.css')}}">
       
    </head>
   
    @include('layouts.frontHeader')
    <body>
        <div id="root">
        	
        </div>


    @include('layouts.frontFooter')


    <script type="text/javascript">


      document.addEventListener('DOMContentLoaded', function () {

      // Get all "navbar-burger" elements
      var $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

      // Check if there are any navbar burgers
      if ($navbarBurgers.length > 0) {

        // Add a click event on each of them
        $navbarBurgers.forEach(function ($el) {
          $el.addEventListener('click', function () {

            // Get the target from the "data-target" attribute
            var target = $el.dataset.target;
            var $target = document.getElementById(target);

            // Toggle the class on both the "navbar-burger" and the "navbar-menu"
            $el.classList.toggle('is-active');
            $target.classList.toggle('is-active');

          });
        });
      }

    });
    </script>

    <script>
    (function(d){
      var iframe = d.body.appendChild(d.createElement('iframe')),
      doc = iframe.contentWindow.document;

      // style the iframe with some CSS
      iframe.style.cssText = "position:absolute;width:200px;height:100px;left:0px;";
      
      doc.open().write('<body onload="' + 
      'var d = document;d.getElementsByTagName(\'head\')[0].' + 
      'appendChild(d.createElement(\'script\')).src' + 
      '=\'\/path\/to\/file\'">');
      
      doc.close(); //iframe onload event happens

      })(document);
    </script>
     <script type="text/javascript" src="{{mix('js/app.js')}}"></script> 
     <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</body>



</html>
