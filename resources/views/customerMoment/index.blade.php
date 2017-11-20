<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Customer Moments</title>

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
                   <center><h1 class="title is-5">Customer Moments</h1>
                    
                        
                        <h1 >
                        Thank you for customers support, so that we could share their precious moments.
                        </h1>
                        
                    
                        <h1 >
                        Things worth celebrating in Life are too much. Know how to cherish, everthings now we had are the best.
                        </h1>
                    
                    </center>
                </div>
                
            </div>
        </div>
        </div>
        
        <div id="customerJewellryIndex">
        	<div class="box">
               
               <!-- <img :src="`/images/lJ2fvr7ni4k1SdRP.jpeg`" >  -->
                <div class="">      
                        <div class="tile is-ancestor" v-for="(arrs,index) in chunkedItemsDesktop">
                            <div class="tile is-parent is-3" v-for="(arr,ind) in arrs">
                                <div class="tile is-child" v-if="arr.images[0]">
                                    <article class="tile" @click="selectedCarouselItems(arr.images)">
                                        <a>
                                        <figure class="image">
                                            <img :src="'/images/' + arr.images[0].image" v-if="arr.images[0].image">
                                        <center>
                                            <p  class="subtitle" ></p>
                                            <p v-if="arr.id">@{{arr.id}}</p>
                                        </center>
                                        </figure>
                                        </a>
                                        
                                    </article>
                                </div>
                            </div>
                        </div>
                                <div class="level">
                                    <article class="level-item" >
                                        <button class="button is-primary" @click="more()">{{trans('engagementRing.More')}}</button>
                                    </article>
                                </div>
                    </div>
                    

        </div>
        <image-carousel :active="carouselActive" :items="carouselItems" @active="carouselActive=!carouselActive"></image-carousel>



    </div>
        </div>


    @include('layouts.frontFooter')

  

</body>



</html>
