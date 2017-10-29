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
        <div class="container">
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
                <li class="is-active"><a>APPOINTMENT FIRST</a></li>
                <li><a>FROM OUR SHOP OR GIA LAB</a></li>
                <li><a>CHOOSE RING SETTING</a></li>
                <li><a>RING INLAY | ENGRAVE</a></li>
                <li><a>PAY WITH FULL SATISFACTION</a></li>
              </ul>
            </div>
        </div>

        <article class="message is-info">
          <div class="message-body">
            {{trans('buyingProcedure.FIRST TO CHOOSE DIAMONDS')}}
          </div>
        </article>



        </div>



    @include('layouts.frontFooter')



    


</body>



</html>
