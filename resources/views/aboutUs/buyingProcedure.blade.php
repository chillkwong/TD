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

       
        <div class="tabs is-centered">
          <ul>
            <li :class="{'is-active': activedSubTab=='Appointment First' }" @click="activeSubTab('Appointment First')" ><a>Appointment First</a></li>
            <li :class="{'is-active': activedSubTab=='Shop Or GIA Lab' }" @click="activeSubTab('Shop Or GIA Lab')" ><a>Shop Or GIA Lab </a></li>
            <li :class="{'is-active': activedSubTab=='Choose Ring Setting' }" @click="activeSubTab('Choose Ring Setting')"><a>Choose Ring Setting</a></li>
            <li :class="{'is-active': activedSubTab=='Ring Inlay | Engrave' }" @click="activeSubTab('Ring Inlay | Engrave')"><a>Ring Inlay | Engrave</a></li>
            <li :class="{'is-active': activedSubTab=='Pay With Satisfation' }" @click="activeSubTab('Pay With Satisfation')"><a>Pay With Satisfation</a></li>
          </ul>
        </div>

        <article class="message is-info" v-if="activedSubTab=='Appointment First'">
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
              <p>Mobile Import Winnie</p>
                <img src="/front_end/buyingProcedure/ting.png">
            </figure>
            </center>
              </a>

              <a href="/front_end/buyingProcedure/Pete_Kwong.vcf">
            <center>
            <figure class="image is-128x128">
              <p>Mobile Import Pete</p>
                <img src="/front_end/buyingProcedure/pete.png">
            </figure>
            </center>
              </a>
          </div>
          
        </article>

        
        <video width="320" height="240" controls>
          <source src="https://tdpublic.nyc3.digitaloceanspaces.com/public/images/0.45_D_SI2.mp4" type="video/mp4">
          <source src="movie.ogg" type="video/ogg">
          Your browser does not support the video tag.
        </video>

        <video controls="controls" width="400" height="300" name="Video Name" src="/videos/MVI_1351.mp4"></video>


        <article class="message is-info" v-if="activedSubTab=='Shop Or GIA Lab'">
          <div class="level is-centered">
            <div class="message-body">
            <center>
            <li>{{trans('buyingProcedure.Choose your favorite diamond，verify the GIA number on diamond’s girdle with report，full pay and take the diamond')}}</li>
            <li>{{trans('buyingProcedure.You may also directly take diamond from GIA Lab， request a verification from GIA ，but that will need to pay certain charge')}}</li>
            
            </center>
          </div>
             
            <center>  
            <figure class="image is-128x128">
              <p>GIA</p>
                <img src="/front_end/GIA/GIA-Logo.jpg">
            </figure>
            </center>
             
          </div>
          
        </article>

        <article class="message is-info" v-if="activedSubTab=='Choose Ring Setting'">
          <div class="level is-centered">
            <div class="message-body">
            <center>
            <p class="title is-6">{{trans('buyingProcedure.CHOOSE ENGAGEMENT RING SETTING')}}：</p>
            <p >{{trans('buyingProcedure.Our shop also has some setting for chosen')}}：</p>

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
