<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Show Diamonds</title>

        <!-- Fonts -->
       
        <link rel="stylesheet" type="text/css" href="{{mix('css/app.css')}}">
       
    </head>
   
    @include('layouts.frontHeader')
    <body>
        <div id="diamondViewerShow">
        	<div class="container">
                <div class="level">
                </div>

                <div class="tile box">
                    <div class="tile notification is-primary">
                            <p class="title">@{{diamond.weight}} carat @{{diamond.shape}} diamond</p>
                    </div>       
                </div>


                <div class="tile is-ancestor ">

                    <div class="tile is-parent">
                            <div class="tile is-child box">
                                <a :href="`https://www.gia.edu/report-check?reportno=${diamond.certificate}`">
                                    
                                    <figure class="image">
                                    <div v-if="diamond.imageLink">
                                        <iframe id="iframe1" :src="diamond.imageLink" width="100%" height="500" ></iframe>
                                    </div>
                                    <div v-if="diamond.imageLink == null">
                                        <img src="/front_end/diamond_show/RoundDiamonds_sample.png" width="100%" height="500"></img>
                                    </div>
                                    </figure>
                                </a>
                            </div>
                        </div>


                    <div class="tile is-parent is-5">
                        <div class="tile is-child box">

                            <div class="tile is-child">
                            <article>
                                <center>
                                    <button class="button is-info" @click="appointmentState=!appointmentState">Appointment</button>
                                    <appointment v-model="diamond" :title="appointmentTitle" @active="appointmentState=!appointmentState" :active="appointmentState" :columns="columns" :processing="false" :langs="langs" :locale="locale"></appointment>
                                </center>
                                <br>
                                <p>
                                {{trans('For more detailed information, can reach GIA website query')}}：
                                </p>
                                <a :href="`https://www.gia.edu/report-check?reportno=${diamond.certificate}`">
                                    <center>{{trans('diamondsearch.GIA Certificate')}}</center>
                                    <figure class="image">
                                        <img src="https://www.gia.edu/onlineopinionV5/GIA-Logo.png">
                                    </figure>
                                </a>
                            </article>
                            </div>
                            <article>
                                <table class="table is-striped is-fullwidth">
                                <thead>
                                    <tr>
                                        <th>{{trans('diamondsearch.Diamond Info')}} (@{{diamond.shape}})</th>
                                    </tr>
                                </thead>
                                    
                                <tbody>
                                    <tr><td>{{trans('diamondsearch.Carat Weight')}}</td><td>@{{diamond.weight}}</td></tr>
                                    <tr><td>{{trans('diamondsearch.Color Grade')}}</td><td>@{{diamond.color}}</td></tr>
                                    <tr><td>{{trans('diamondsearch.Clarity Grade')}}</td><td>@{{diamond.clarity}}</td></tr>
                                    <tr><td>{{trans('diamondsearch.Cut Grade')}}</td><td>@{{diamond.cut}}</td></tr>
                                </tbody>

                                <thead>
                                    <tr>
                                        <th>{{trans('diamondsearch.Finish')}}</th>
                                    </tr>
                                </thead>
                                    
                                <tbody>
                                    <tr><td>{{trans('diamondsearch.Polish')}}</td><td>@{{diamond.polish}}</td></tr>
                                    <tr><td>{{trans('diamondsearch.Symmetry')}}</td><td>@{{diamond.symmetry}}</td></tr>
                                </tbody>

                                <thead>
                                    <tr>
                                        <th>{{trans('diamondsearch.Fluorescence')}}</th>
                                    </tr>
                                </thead>
                                    
                                <tbody>
                                    <tr><td>{{trans('diamondsearch.Fluorescence')}}</td><td>@{{diamond.fluorescence}}</td></tr>
                                </tbody>
                                
                                <thead>
                                    <tr>
                                        <th>{{trans('diamondsearch.Certificate')}}</th>
                                    </tr>
                                </thead>
                                    
                                <tbody>
                                    <a :href="`https://www.gia.edu/report-check?reportno=${diamond.certificate}`">
                                    <tr><td>{{trans('diamondsearch.Certificate')}}</td><td>@{{diamond.certificate}}</td></tr>
                                    </a>
                                </tbody>

                                </table>
                            </article>

                            
                        </div>
                    </div>

                </div>

                
                <div class="cut-bg">
                    <div class="caption">
                        <span class="border">{{trans('diamondsearch.Cut Grade')}}: @{{diamond.cut}}</span>
                        <hr>
                        <span class="cut-text" v-if="diamond.cut == 'EX'">{{trans('diamondsearch.cutEx')}}.
                        <br>
                        </span>
                        <span class="cut-text">{{trans('diamondsearch.Want to learn even more about cut')}}? Learn More<br>
                        </span>
                        <span class="cut-text">
                            {{trans('diamondsearch.cutDesrciption')}}.
                        </span>
                    </div>
                </div>

                <div class="tile is-ancestor ">

                    <div class="tile is-parent">
                            <div class="tile is-child box">
                            
                            <article>
                                <div class="columns">
                                    <div class="column is-6">
                                        <center>
                                            <p1 class="title is-5 is-info">
                                                {{trans('diamondsearch.DIAMOND SIZE')}}: @{{diamond.weight}} Carat
                                            </p1>
                                            <br>
                                        </center>
                                    </div>
                                </div>

                                <div class="columns">
                                    <div class="column is-6">
                                        <center><p1 class="subtitle is-6">
                                            {{trans('diamondsearch.caratDescription')}}
                                        </p1>
                                        </center>
                                        
                                    </div>
                                    <div class="column is-6">
                                        <center><p1 class="subtitle is-6">
                                            {{trans('diamondsearch.caratDescription1')}}
                                        </p1>
                                        </center>
                                        <center><a >
                                            {{trans('diamondsearch.Learn More')}}
                                        </a>
                                        </center>
                                        
                                    </div>
                                    <br>
                                </div>
                                <img src="/front_end/diamond_show/diamond_weight.jpg">
                            </article>


                        <hr>


                            <article>
                                <div class="columns">
                                    <div class="column is-6">
                                    
                                        <center>
                                            <p1 class="title is-5 is-primary">
                                                {{trans('diamondsearch.Diamond Color')}}: @{{diamond.color}} 
                                            </p1>
                                            <br>
                                        </center>
                                    
                                    </div>
                                </div>

                                <div class="columns">
                                    <div class="column is-6">
                                        <center><p1 class="subtitle is-6">
                                            {{trans('diamondsearch.The highest "near-colourless" grade. Colour may be detectable when compared to much higher "colourless" grades. Excellent value.')}}
                                            <center>
                                            {{trans('diamondsearch.Want to learn even more about colour')}}?
                                            <a >
                                            {{trans('diamondsearch.Learn More')}}
                                            </a>
                                            </center>
                                        </p1>
                                        </center>
                                        
                                    </div>
                                    <div class="column is-6">
                                        <center>
                                            <p1 class="subtitle is-6">
                                                <li>{{trans('diamondsearch.For the purist, look for a colourless diamond with a grade of D-F for a diamond with no discernible colour.')}}
                                                </li>
                                            </p1>
                                            <br>
                                            <p1 class="subtitle is-6">
                                                <li>{{trans('diamondsearch.For an excellent value in a diamond with little or no noticeable colour to the unaided eye, look for a near-colourless grade of G-I')}}
                                                </li>
                                            </p1>
                                        </center>
                                        
                                    </div>
                                    <br>
                                </div>
                                <img src="/front_end/diamond_show/diamond_color.jpg">
                            </article>

                        </div>
                    </div>

                </div>

                <div class="clarity-bg">
                    <div class="caption">
                        <span class="border">{{trans('diamondsearch.Clarity')}}: @{{diamond.clarity}}</span>
                        <hr>
                        <span class="cut-text">{{trans('diamondsearch.VS1-VS2: Very slightly included. Minor inclusions ranging from difficult (VS1) to somewhat easy (VS2) to see at 10x magnification.
                        <br>
                        </span>
                        <span class="cut-text">
                            {{trans('diamondsearch.Want to learn even more about clarity?
                            <br>
                            <a >
                                Learn More
                            </a>
                        </span>
                        <span class="cut-text">
                            <li>{{trans('diamondsearch.Clarity refers to a diamond's relative absence of tiny, natural characteristics known as blemishes and inclusions.
                            </li>
                            <li>
                            {{trans('diamondsearch.Many of these characteristics are microscopic and do not affect a diamond's beauty in any discernible way.</li>
                        </span>
                    </div>
                </div>
                <carousel :carouselItems="images"></carousel>
                
            </div>
        </div>


    @include('layouts.frontFooter')

  
</body>



</html>

<style>
body, html {
  height: 100%;
  margin: 0;
  color: #777;
}
.cut-bg, .clarity-bg, .bgimg-3 {
  position: relative;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

}
.cut-bg {
    /* The image used */
    background-image: url("/front_end/diamond_show/diamond_cut.jpg");

    /* Full height */
    height: 100%; 

}
.clarity-bg {
    /* The image used */
    background-image: url("/front_end/diamond_show/diamond_clarity.jpg");

    /* Full height */
    height: 100%; 

}
.caption {
  left: 0;
  top: 50%;
  width: 100%;
  text-align: left;
  color: #000;
  padding: 80px;
}

.caption span.border {
  color: #fff;
  font-size: 25px;
  border: 40px;
}

.caption span.cut-text {
  font-weight: bold;
  width: 80px;
  text-align: left;
  color: #fff;
  font-size: 15px;
  border: 40px;
}
</style>