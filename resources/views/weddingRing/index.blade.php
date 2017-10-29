<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Search Wedding Ring</title>

        <!-- Fonts -->
       
        <link rel="stylesheet" type="text/css" href="{{mix('css/app.css')}}">
       
    </head>
   
    @include('layouts.frontHeader')
    <body>
        <div class="container">
        <div class="level">
            
        </div>
        <div class="tile is-ancestor" >
            <div class="tile is-parent ">
                <div class="tile is-child notification is-primary" >
                    <center><h1 class="title is-5">Wedding Rings</h1>
                        <h1 >
                        Thank you for customers support, so that we could share their precious moments.
                        </h1>
                    
                    </center>
                </div>
                
            </div>
        </div>
        </div>
        
        <div id="root">

        	
        </div>


    @include('layouts.frontFooter')

  
     
</body>



</html>
