<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Buying Procedure</title>

        <!-- Fonts -->
       
        <link rel="stylesheet" type="text/css" href="{{mix('css/app.css')}}">
       
    </head>
   
    @include('layouts.frontHeader')
    <body>
        <div id="aboutUs" class="container">
        <div class="level">
            
        </div>
        <div class="tile is-ancestor" >
            <div class="tile is-parent ">
                <div class="tile is-child notification is-primary" >
                    <center><h1 class="title is-5">BUYING PROCEDURE</h1>
                        First to buy diamonds, then buy ring setting
                    </center>
                </div>
                
            </div>
        </div>
        
        <div id="buyingProcedure">
        	<div class="tabs is-centered">
              <ul>
                <li class="is-active"><a></a></li>
                <li><a></a></li>
                <li><a></a></li>
                <li><a></a></li>
                <li><a></a></li>
              </ul>
            </div>
        </div>

       
      @include('layouts.subTabs.buyingProcedure')

        <article class="message is-primary" >
          <div class="level is-centered">
            <div class="message-body">

               @include('aboutUs.buyingProcedureContent')




            </div>
          </div>
          
        </article>





        </div>



    @include('layouts.frontFooter')



    


</body>



</html>
