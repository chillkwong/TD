<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Search Engagement Ring - {{trans('home.webTitle')}}</title>

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
                    <center><h1 class="title is-5">{{trans('engagementRing.Engagement Rings - Solitaire')}}</h1>
                        <h1 >
                        {{trans('engagementRing.indexDescription')}}
                        </h1>
                    
                    </center>
                </div>
                
            </div>
        </div>
        </div>
        
        <div id="engagementRings">
        	<div class="box">
                <div class="level">

                </div>

                    <!-- <div class="tile is-ancestor" >
                        <div class="tile is-parent ">
                            <div class="tile is-child notification is-primary" >
                                <center><h1 class="title is-5">Engagement Rings - Solitaire</h1>
                                    <h1 >
                                    Thank you for customers support, so that we could share their precious moments.
                                    </h1>
                                
                                </center>
                            </div>
                            
                        </div>
                    </div> -->

                @include('engagementRing.engagementRingContent')


                    </div>

        </div>


    @include('layouts.frontFooter')

  
</body>



</html>
