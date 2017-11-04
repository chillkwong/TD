<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Show Wedding Rings</title>

        <!-- Fonts -->
       
        <link rel="stylesheet" type="text/css" href="{{mix('css/app.css')}}">
       
    </head>
   
    @include('layouts.frontHeader')
    <body>
        <div id="weddingRingsShow">
        	<div class="container">
                <div class="level">
                </div>

                <div class="tile box">
                    <div class="tile notification is-primary">
                            <p class="title">@{{weddingRing.wedding_rings[0].description}} Wedding Rings</p>
                    </div>       
                </div>


                <div class="tile is-ancestor ">

                    <div class="tile is-parent is-7">
                            <div class="tile is-child box">
                                    <figure class="image" @click="carouselState=!carouselState">
                                    <carousel @active="carouselState=!carouselState" :active="carouselState"  :height="'500'" :width="'100%'" :upperitems="combinedWeddingRings" :items="customerItems" title="customer jewellries"></carousel>
                                    </figure>
                            </div>
                        </div>


                    <div class="tile is-parent is-5">
                        <div class="tile is-child box">

                            <div class="tile is-child">
                            <article>
                                <center>
                                    <button class="button is-info" @click="appointmentState=!appointmentState">Appointment</button>
                                    <appointment v-model="weddingRing.wedding_rings[0]" :title="appointmentTitle" @active="appointmentState=!appointmentState" :active="appointmentState" :columns="columns"  :processing="false" :langs="langs" :locale="locale"></appointment>
                                </center>
                                <br>
                                <p>
                                For more detailed information, can reach GIA website query：
                                </p>
                            </article>
                            </div>
                            <article>
                                <table class="table is-striped is-fullwidth">
                                <thead>
                                    <tr>
                                        <th>Wedding Rings Info</th><th v-if="weddingRing.wedding_rings[1]">Men</th><th v-if="weddingRing.wedding_rings[1]">Female</th>
                                    </tr>
                                </thead>
                                    
                                <tbody>
                                    <tr><td>Unit Price</td><td>$@{{weddingRing.wedding_rings[0].unit_price}}</td><td v-if="weddingRing.wedding_rings[1]">$@{{weddingRing.wedding_rings[1].unit_price}}</td></tr>
                                    <tr><td>Metal</td><td>@{{weddingRing.wedding_rings[0].metal}}</td><td v-if="weddingRing.wedding_rings[1]">@{{weddingRing.wedding_rings[1].metal}}</td></tr>
                                    <tr><td>Side Stone</td><td>@{{weddingRing.wedding_rings[0].sideStone}}</td><td v-if="weddingRing.wedding_rings[1]">@{{weddingRing.wedding_rings[1].sideStone}}</td></tr>
                                </tbody>

                                <thead>
                                    <tr>
                                        <th colspan="3">More Details</th>
                                    </tr>
                                </thead>
                                    
                                <tbody>
                                    <tr><td>Stock</td><td>@{{weddingRing.wedding_rings[0].stock}}</td><td v-if="weddingRing.wedding_rings[1]">@{{weddingRing.wedding_rings[1].stock}}</td></tr>
                                    <tr><td>Name</td><td>@{{weddingRing.wedding_rings[0].name}}</td><td v-if="weddingRing.wedding_rings[1]">@{{weddingRing.wedding_rings[1].name}}</td></tr>
                                    <tr><td>Description</td><td>@{{weddingRing.wedding_rings[0].description}}</td><td v-if="weddingRing.wedding_rings[1]">@{{weddingRing.wedding_rings[1].description}}</td></tr>
                                </tbody>

                                </table>
                            </article>

                            
                        </div>
                    </div>

                </div>

                
              

                
                
            </div>
        </div>


    @include('layouts.frontFooter')


</body>



</html>
