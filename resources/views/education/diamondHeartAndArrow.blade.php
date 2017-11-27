<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>WHAT IS HEARTS AND ARROWS DIAMOND？ - {{trans('home.webTitle')}}</title>

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
                    <center><h1 class="title is-5">WHAT IS HEARTS AND ARROWS DIAMOND？</h1>
                        <div class="level">
                        <figure>
                            <img width="400" :src="'/front_end/education/' + activedSubTab +'/pageImage.jpg'" class="">
                        </figure>
                        A perfect cut round brilliant-cut diamonds in tools such as: hearts & arrows viewer. Under the tool will be showing a perfect symmetry eight hearts, eight arrow shape pattern.
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

                            <center><p class="title is-6">{{trans('diamondHeartArrow.HEARTS AND ARROWS DIAMOND')}}</p>
                              <li>{{trans('diamondHeartArrow.para1')}}</li>
                            </center>
                            <div class="level">
                            <li>{{trans('diamondHeartArrow.para2')}}</li>
                               
                            </div>
                        
                        </center>
                        
                      </div>
                         
                  </div>

              <div class="tile">

                 <a class="box">
                    <center>  
                        <figure class="image">
                          <p>8 HEARTS OF DIAMOND</p>
                            <img  src="/front_end/education/hearts-and-arrows/hr2-1-1-150x150.png">
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
                       
                            <div class="level">
                            <li>{{trans('diamondHeartArrow.para3')}}</li>
                               
                            </div>
                        
                        
                      </div>
                         
                  </div>

              <div class="tile">

                 <a class="box">
                    <center>  
                        <figure class="image">
                          <p>8 ARROWS OF DIAMOND</p>
                          <hr>
                            <img  src="/front_end/education/hearts-and-arrows/h3_300-1-150x150.png">
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
