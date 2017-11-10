<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>WHAT IS DIAMOND POLISH ?</title>

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
                    <center><h1 class="title is-5">WHAT IS DIAMOND POLISH ?</h1>
                        <div class="level">
                        <figure>
                            <img :src="'/front_end/education/' + activedSubTab +'/pageImage.jpg'" class="">
                        </figure>
                        The diamond polish affects the ability of light coming out from the diamond. The integration of brilliant in the diamond is a very very important factor.
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

       
        @include('layouts.subTabs.anatony')

        <div >
        <article class="message is-primary" >
            <div class="level is-centered">
            
            <div class="tile is-ancestor">
                  <div class="tile is-10">
                
                        <div class="message-body">
                        <center>

                            <center><p class="title is-6">{{trans('diamondPolish.DIAMOND POLISH')}}</p>
                              <li>{{trans('diamondPolish.para1')}}</li>
                            </center>
                            <div class="level">
                            
                               
                            </div>
                        
                        
                        </center>

                        <li>{{trans('diamondPolish.para2')}}</li>
                        <li>{{trans('diamondPolish.para3')}}</li>
                        <li>{{trans('diamondPolish.para4')}}</li>
                        <li>{{trans('diamondPolish.para5')}}</li>
                        <li>{{trans('diamondPolish.para6')}}</li>
                        <li>{{trans('diamondPolish.para7')}}</li>
                        <li>{{trans('diamondPolish.para8')}}</li>

                        
                      </div>
                         
                  </div>

              <div class="tile">

                 <a class="box">
                    <center>  
                        <figure class="image">
                          <p>{{trans('diamondPolish.DIAMOND POLISH')}}</p>
                            <img  src="/front_end/education/anatomy-polish/pageImage.jpg">
                        </figure>
                    </center>
                </a>
              </div>

        </div>
        </article>




         </div>







        </div>
        </div>



    @include('layouts.frontFooter')


</body>



</html>
