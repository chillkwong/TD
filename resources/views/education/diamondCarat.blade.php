<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Diamond Carat - {{trans('home.webTitle')}}</title>

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
                    <center><h1 class="title is-5">DIAMOND Carat | EDUCATION</h1>
                        <div class="level">
                        <figure>
                            <img class="box" :src="'/front_end/education/carat/pageImage.jpg'" class="">
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

        <article class="message is-primary" >
          <div class="level is-centered">
            <div class="message-body">
            <center>
            <p class="title is-6">{{trans('education.caratTitle1')}}</p>
            <div class="level">
            <li>{{trans('education.caratPara1')}}</li>
                <a>
                <center>  
                <figure class="image is-128x128">
                  <p>Diamond Carat & Size</p>
                    <img src="/front_end/education/carat/pod-150x150.png">
                </figure>
                </center>
                  </a>
            </div>
            
            <p class="title is-6">{{trans('education.caratTitle2')}}</p>
            <div class="level">
            <li>{{trans('education.caratPara2')}}</li>
                <a href="/front_end/education/Winnie_Kwong.vcf">
                    <center>  
                        <figure class="image is-128x128">
                          <p></p>
                            <img src="/front_end/education/carat/Different-carat-sizes-150x150.jpg">
                        </figure>
                    </center>
                </a>
            </div>
            <li>{{trans('education.caratPara3')}}</li>
            <img src="/front_end/education/carat/caratsizes.jpg">
            </center>
          </div>
             

          </div>
          
        </article>





        </div>



    @include('layouts.frontFooter')


</body>



</html>
