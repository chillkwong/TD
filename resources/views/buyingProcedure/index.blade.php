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
                <li class="is-active"><a></a></li>
                <li><a></a></li>
                <li><a></a></li>
                <li><a></a></li>
                <li><a></a></li>
              </ul>
            </div>
        </div>

       
        <div class="tabs is-centered">
          <ul>
            <li class="is-active"><a>Appointment First</a></li>
            <li><a>Shop Or GIA Lab </a></li>
            <li><a>Videos</a></li>
            <li><a>Documents</a></li>
          </ul>
        </div>

        <article class="message is-info">
          <div class="level is-centered">
            <div class="message-body">
            <center>
            <p class="title is-6">{{trans('buyingProcedure.FIRST TO CHOOSE DIAMONDS')}}：</p>
            <p class="title is-6">{{trans('buyingProcedure.＊P.S.＊ choose few more diamonds that are in the similar price range, compare them at the same time.')}}</p>
            <p class="title is-6">Whatsapp： 5484 4533 ( Winnie) / 5486 9451(Pete)</p>
            <p class="title is-6">{{trans('buyingProcedure.Security issues，please make an appointment to shop in advance.')}}</p>
            </center>
          </div>
             <a href="/front_end/buyingProcedure/Winnie_Kwong.vcf">
            <center>  
            <figure class="image is-128x128">
              <p>Winnie</p>
                <img src="/front_end/buyingProcedure/ting.png">
            </figure>
            </center>
              </a>

              <a href="/front_end/buyingProcedure/Pete_Kwong.vcf">
            <center>
            <figure class="image is-128x128">
              <p>Pete</p>
                <img src="/front_end/buyingProcedure/pete.png">
            </figure>
            </center>
              </a>
          </div>
          
        </article>



        </div>



    @include('layouts.frontFooter')



    


</body>



</html>
