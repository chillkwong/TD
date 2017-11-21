<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Gia Report</title>

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
                    <center><h1 class="title is-5">HOW TO INTERPRET GIA REPORT ?</h1>
                        <div class="level">
                        <figure >
                            <img width="400" :src="'/front_end/education/' + activedSubTab +'/pageImage.jpg'" >
                        </figure>
                        You know how to interpret GIA Report, basically to see other diamond certification reports, such as: IGI or HRD, will not have any difficulty, but the main is that they are called, respectively, or a little different.
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

       
        @include('layouts.subTabs.gradingCert')

        



        <article class="message is-primary" v-if="activedSubTab=='grading-eye-clean'">
          <div class="level is-centered">
            <div class="message-body">
            <center>

            <center><p class="title is-6">{{trans('education.eyeCleanTitle1')}}</p></center>
            <div class="level">
            <li>{{trans('education.eyeCleanPara1')}}</li>
                <a>
                <center>  
                <figure class="image is-128x128">
                  <p>Eye Clean Diamond</p>
                    <img src="/front_end/education/grading-eye-clean/pageImage1.jpg">
                </figure>
                </center>
                  </a>
            </div>
            
            </center>
            <li>{{trans('education.eyeCleanPara2')}}</li>
            <li>{{trans('education.eyeCleanPara3')}}</li>
          </div>
             

          </div>
          
        </article>



        </div>



    @include('layouts.frontFooter')


</body>



</html>
