<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Diamond Cut</title>

        <!-- Fonts -->
       
        <link rel="stylesheet" type="text/css" href="{{mix('css/app.css')}}">
       
    </head>
   
    @include('layouts.frontHeader')
    <body>
        <div class="container" id="education"> 
        <div class="level">
            
        </div>
        <div class="tile is-ancestor" >
            <div class="tile is-parent ">
                <div class="tile is-child notification is-primary" >
                    <center><h1 class="title is-5">DIAMOND Cut | EDUCATION</h1>
                        <div class="level">
                        <figure>
                            <img class="box" :src="'/front_end/education/cut/pageImage.jpg'" class="">
                        </figure>
                        It increases the weight of a diamond, and looking up from the diameter of the surface will also increase, but add a lot of weight, just add a little diameter.
                        </div>
                    </center>
                </div>
                
            </div>
        </div>
        
        <div id="education">
            <div class="tabs is-centered">
              <ul>
              
              </ul>
            </div>
        </div>

       
        @include('layouts.subTabs.4cs')

       <article class="message is-primary">
          <div class="level is-centered">
            <div class="message-body">
            
            <center>
            <p class="title is-6">{{trans('education.cutTitle1')}}</p>
            <div class="level">
            <li>{{trans('education.cutPara1')}}</li>
                <a>
                <center>  
                <figure class="image">
                  <p>Diamond Cut</p>
                    <img src="/front_end/education/cut/cut.jpg">
                </figure>
                </center>
                  </a>
            </div>
            <li>{{trans('education.cutPara2')}}</li>
            <li>{{trans('education.cutPara3')}}</li>
            </center>

          </div>
          </div>
          
        </article>





        </div>



    @include('layouts.frontFooter')


</body>



</html>
