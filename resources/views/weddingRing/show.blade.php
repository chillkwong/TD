<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{trans('weddingRing.Wedding Rings')}}</title>

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
                            <p class="title">
                            @{{weddingRing.wedding_rings[0].style | transJs(langs,locale)}} @{{weddingRing.wedding_rings[0].metal | transJs(langs,locale)}} @{{weddingRing.wedding_rings[0].sideStone? transJsMet(columns[2],langs,locale):''}} 
                            {{trans('weddingRing.Wedding Ring')}}
                            </p>
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
                                    <button class="button is-info" @click="appointmentState=!appointmentState">{{trans('weddingRing.Appointment')}}</button>
                                    <appointment v-model="weddingRing.wedding_rings[0]" :title="appointmentTitle" @active="appointmentState=!appointmentState" :active="appointmentState" :columns="columns"  :processing="false" :langs="langs" :locale="locale"></appointment>
                                </center>
                                <br>
                                <p>
                                {{trans('engagementRing.For more detailed information')}}, 
                                <br>
                                <a @click="appointmentState=!appointmentState">{{trans('engagementRing.Make Appointment')}}</a> or <a :href="hrefLangs + '/about-us'">{{trans('engagementRing.contact us')}}</a> {{trans('engagementRing.for further')}}：
                            </article>
                            </div>
                            <article>
                                <table class="table is-striped is-fullwidth">
                                <thead>
                                    <tr>
                                        <th>{{trans('weddingRing.Wedding Rings Info')}}</th><th v-if="weddingRing.wedding_rings[1]">@{{weddingRing.wedding_rings[0].gender | transJs(langs,locale)}}</th><th v-if="weddingRing.wedding_rings[1]">@{{weddingRing.wedding_rings[1].gender | transJs(langs,locale)}}</th>
                                    </tr>
                                </thead>
                                    
                                <tbody>
                                    <tr><td>{{trans('weddingRing.Unit Price')}}</td><td>$@{{weddingRing.wedding_rings[0].unit_price}}</td><td v-if="weddingRing.wedding_rings[1]">$@{{weddingRing.wedding_rings[1].unit_price}}</td></tr>
                                    <tr><td>{{trans('weddingRing.Metal')}}</td><td>@{{weddingRing.wedding_rings[0].metal | transJs(langs,locale)}}</td><td v-if="weddingRing.wedding_rings[1]">@{{weddingRing.wedding_rings[1].metal | transJs(langs,locale)}}</td></tr>
                                    <tr><td>{{trans('weddingRing.Side Stone')}}</td><td>@{{weddingRing.wedding_rings[0].ct}}ct</td><td v-if="weddingRing.wedding_rings[1]">@{{weddingRing.wedding_rings[1].ct}}ct</td></tr>
                                </tbody>

                                <thead>
                                    <tr>
                                        <th colspan="3">{{trans('weddingRing.More Details')}}</th>
                                    </tr>
                                </thead>
                                    
                                <tbody>
                                    <tr><td>{{trans('weddingRing.Stock')}}</td><td>@{{weddingRing.wedding_rings[0].stock}}</td><td v-if="weddingRing.wedding_rings[1]">@{{weddingRing.wedding_rings[1].stock}}</td></tr>
                                    <tr><td>{{trans('weddingRing.Name')}}</td><td>@{{weddingRing.wedding_rings[0].name}}</td><td v-if="weddingRing.wedding_rings[1]">@{{weddingRing.wedding_rings[1].name}}</td></tr>

                                    <tr><td>{{trans('weddingRing.Description')}}</td><td>@{{weddingRing.wedding_rings[0].style | transJs(langs,locale)}},@{{weddingRing.wedding_rings[0].metal | transJs(langs,locale)}},@{{weddingRing.wedding_rings[0].sideStone? transJsMet(columns[2],langs,locale):''}}
                                    {{trans('weddingRing.Wedding Ring')}}

                                    </td><td v-if="weddingRing.wedding_rings[1]">@{{weddingRing.wedding_rings[1].style | transJs(langs,locale)}},@{{weddingRing.wedding_rings[1].metal | transJs(langs,locale)}},@{{weddingRing.wedding_rings[1].sideStone? transJsMet(columns[2],langs,locale):''}}
                                    {{trans('weddingRing.Wedding Ring')}}
                                    </td></tr>
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
