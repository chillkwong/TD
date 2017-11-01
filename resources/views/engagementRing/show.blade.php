<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Show Engagement Rings</title>

        <!-- Fonts -->
       
        <link rel="stylesheet" type="text/css" href="{{mix('css/app.css')}}">
       
    </head>
   
    @include('layouts.frontHeader')
    <body>
        <div id="engagementRingsShow">
        	<div class="container">
                <div class="level">
                </div>

                <div class="tile box">
                    <div class="tile notification is-primary">
                            <p class="title">@{{engagementRing.shoulder}} Shoulder @{{engagementRing.prong}} Engagement Ring</p>
                    </div>       
                </div>


                <div class="tile is-ancestor ">

                    <div class="tile is-parent is-7">
                            <div class="tile is-child box">
                                    <figure class="image" @click="carouselState=!carouselState">
                                    <carousel @active="carouselState=!carouselState" :active="carouselState" :items="4" :height="'500'" :width="'100%'" :upperitems="engagementRing" :items="customerItems" title="customer jewellries"></carousel>
                                    </figure>
                            </div>
                        </div>


                    <div class="tile is-parent is-5">
                        <div class="tile is-child box">

                            <div class="tile is-child">
                            <article>
                                <center>
                                    <button class="button is-info" @click="appointmentState=!appointmentState">Appointment</button>
                                    <appointment v-model="engagementRing" :title="appointmentTitle" @active="appointmentState=!appointmentState" :active="appointmentState" :columns="columns"  :processing="false"></appointment>
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
                                        <th>Engagement Ring Info</th>
                                    </tr>
                                </thead>
                                    
                                <tbody>
                                    <tr><td>Unit Price</td><td>$@{{engagementRing.unit_price}}</td></tr>
                                    <tr><td>Shoulder</td><td>@{{engagementRing.shoulder}}</td></tr>
                                    <tr><td>Prong</td><td>@{{engagementRing.prong}}</td></tr>
                                    <tr><td>Side Stone</td><td>@{{engagementRing.sideStone}}</td></tr>
                                </tbody>

                                <thead>
                                    <tr>
                                        <th>More Details</th>
                                    </tr>
                                </thead>
                                    
                                <tbody>
                                    <tr><td>Stock</td><td>@{{engagementRing.stock}}</td></tr>
                                    <tr><td>Name</td><td>@{{engagementRing.name}}</td></tr>
                                    <tr><td>Description</td><td>@{{engagementRing.description}}</td></tr>
                                </tbody>

                                </table>
                            </article>

                            
                        </div>
                    </div>

                </div>
        </div>


    @include('layouts.frontFooter')

  

</body>



</html>
