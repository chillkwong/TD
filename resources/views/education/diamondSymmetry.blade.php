<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>WHAT IS DIAMOND SYMMETRY ?</title>

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
                    <center><h1 class="title is-5">WHAT IS DIAMOND SYMMETRY ?</h1>
                        <div class="level">
                        <figure>
                            <img :src="'/front_end/education/' + activedSubTab +'/pageImage.jpg'" class="box">
                        </figure>
                        In round diamond, the tip of main pavilion facets should be accurately aligned with the main facets. For examples: we can see the facets of a diamond their crown and pavilion should be asymmetry.
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

                            <center><p class="title is-6">{{trans('diamondSymmetry.ASYMMETRIC OF CROWN AND PAVILION')}}</p>
                              <li>{{trans('diamondSymmetry.para1')}}</li>
                            </center>
                         
                        
                        </center>
                        
                      </div>
                         
                  </div>

              <div class="tile is-2">

                 <a class="box">
                    <center>  
                        <figure class="image">
                          <p>ASYMMETRIC OF CROWN AND PAVILION</p>
                            <img  src="/front_end/education/anatomy-symmetry/missalignment-1-98x98.jpg">
                        </figure>
                    </center>
                </a>
              </div>

        </div>
        </article>


        <article class="message is-primary" >
            <div class="level is-centered">
            
            <div class="tile is-ancestor">
                  <div class="tile is-10">
                
                        <div class="message-body">
                        <center>

                            <center><p class="title is-6">{{trans('diamondSymmetry.EXTRA FACETS')}}</p>
                              <li>{{trans('diamondSymmetry.para2')}}</li>
                            </center>
                         
                        
                        </center>
                        
                      </div>
                         
                  </div>

              <div class="tile is-2">

                 <a class="box">
                    <center>  
                        <figure class="image">
                          <p>EXTRA FACETS</p>
                            <img  src="/front_end/education/anatomy-symmetry/facets-101x101.jpg">
                        </figure>
                    </center>
                </a>
              </div>

        </div>
        </article>


        <article class="message is-primary" >
            <div class="level is-centered">
            
            <div class="tile is-ancestor">
                  <div class="tile is-10">
                
                        <div class="message-body">
                        <center>

                            <center><p class="title is-6">{{trans('diamondSymmetry.OFF CENTER CULET')}}</p>
                              <li>{{trans('diamondSymmetry.para3')}}</li>
                            </center>
                         
                        
                        </center>
                        
                      </div>
                         
                  </div>

              <div class="tile is-2">

                 <a class="box">
                    <center>  
                        <figure class="image">
                          <p>OFF CENTER CULET</p>
                            <img  src="/front_end/education/anatomy-symmetry/off_center_culet-1-148x148.jpg">
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
