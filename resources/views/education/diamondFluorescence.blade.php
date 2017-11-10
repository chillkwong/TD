<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>WHAT IS DIAMOND FLUORESCENCE ?</title>

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
                    <center><h1 class="title is-5">WHAT IS DIAMOND FLUORESCENCE ?</h1>
                        <div class="level">
                        <figure>
                            <img :src="'/front_end/education/' + activedSubTab +'/pageImage.jpg'" class="">
                        </figure>
                        TDiamond fluorescence response is a natural reaction. Different gems will also appear fluorescence. Some diamonds when they are exposed to ultraviolet light, visible light will be emitted, this is the diamond fluorescence.
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

                            <center><p class="title is-6">{{trans('diamondFluorescence.DIAMOND FLUORESCENCE')}}</p>
                              <li>{{trans('diamondFluorescence.title1')}}</li>
                            </center>
                            <div class="level">
                            
                               
                            </div>
                        
                        
                        </center>

                        <li>{{trans('diamondFluorescence.para1')}}</li>

                        <center>
                              <li>{{trans('diamondFluorescence.title2')}}</li>
                        </center>
                            <div class="level">
                            
                               
                            </div>
                        
                        
                        </center>

                        <li>{{trans('diamondFluorescence.para2')}}</li>


                        
                      </div>
                         
                  </div>

              <div class="tile">

                 <a class="box">
                    <center>  
                        <figure class="image">
                          <p>{{trans('diamondFluorescence.DIAMOND FLUORESCENCE')}}</p>
                            <img  src="/front_end/education/anatomy-fluorescence/diamond-fluorescence-1.jpg">
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
