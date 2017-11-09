<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Diamond Color</title>

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
                    <center><h1 class="title is-5">DIAMOND Color | EDUCATION</h1>
                        <div class="level">
                        <figure>
                            <img class="box" :src="'/front_end/education/color/pageImage.jpg'" class="">
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
            <p class="title is-6">{{trans('education.colorTitle1')}}</p>
            <li>{{trans('education.colorPara1')}}</li>
            <li>{{trans('education.colorPara2')}}</li>

            <p class="title is-6">{{trans('education.colorTitle2')}}</p>
            <li>{{trans('education.colorPara3')}}</li>

            <div class="level">
                <a>
                <center>  
                    <figure class="image">
                      <p>D Color Diamond</p>
                        <img src="/front_end/education/color/d.jpg">
                    </figure>
                </center>
                </a>

                <a>
                <center>  
                    <figure class="image">
                      <p>E Color Diamond</p>
                        <img src="/front_end/education/color/e.jpg">
                    </figure>
                </center>
                </a>

                <a>
                <center>  
                    <figure class="image">
                      <p>F Color Diamond</p>
                        <img src="/front_end/education/color/f.jpg">
                    </figure>
                </center>
                </a>

            </div>

            <p class="title is-6">{{trans('education.colorTitle3')}}</p>
            <li>{{trans('education.colorPara4')}}</li>
            <div class="level">
                <a>
                <center>  
                    <figure class="image">
                      <p>G Color Diamond</p>
                        <img src="/front_end/education/color/g.jpg">
                    </figure>
                </center>
                </a>

                <a>
                <center>  
                    <figure class="image">
                      <p>H Color Diamond</p>
                        <img src="/front_end/education/color/h.jpg">
                    </figure>
                </center>
                </a>

                <a>
                <center>  
                    <figure class="image">
                      <p>I Color Diamond</p>
                        <img src="/front_end/education/color/i.jpg">
                    </figure>
                </center>
                </a>

                <a>
                <center>  
                    <figure class="image">
                      <p>J Color Diamond</p>
                        <img src="/front_end/education/color/j.jpg">
                    </figure>
                </center>
                </a>

            </div>

            <p class="title is-6">{{trans('education.colorTitle4')}}</p>
            <div class="level">
            <li>{{trans('education.colorPara5')}}</li>
            <li>{{trans('education.colorPara6')}}</li>
            </div>

            <div class="level">
                <a>
                <center>  
                    <figure class="image">
                      <p>K Color Diamond</p>
                        <img src="/front_end/education/color/k.jpg">
                    </figure>
                </center>
                </a>

                <a>
                <center>  
                    <figure class="image">
                      <p>K Color Diamond（BROWN）</p>
                        <img src="/front_end/education/color/K_brown.jpg">
                    </figure>
                </center>
                </a>

                <a>
                <center>  
                    <figure class="image">
                      <p>K Color Diamond（BROWN）</p>
                        <img src="/front_end/education/color/K_brown1.jpg">
                    </figure>
                </center>
                </a>

            </div>

            </center>

          </div>
          </div>
          
        </article>





        </div>



    @include('layouts.frontFooter')


</body>



</html>
