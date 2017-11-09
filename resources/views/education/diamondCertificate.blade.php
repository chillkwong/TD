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

       
        <div class="tabs is-centered">
          <ul>
            <li :class="{'is-active': activedSubTab=='grading-certficate' }" @click="activeSubTab('grading-certficate')" ><a>Diamond certficate</a></li>
            <li :class="{'is-active': activedSubTab=='gia-report' }" @click="activeSubTab('gia-report')" ><a>Gia Report </a></li>
            <li :class="{'is-active': activedSubTab=='grading-eye-clean' }" @click="activeSubTab('grading-eye-clean')"><a>Eye Clean Diamond</a></li>
           
            
          </ul>
        </div>

        <article class="message is-primary" v-if="activedSubTab=='grading-certficate'">
          <div class="level is-centered">
            <div class="message-body">
            <center>

            <center><p class="title is-6">{{trans('education.giaTitle1')}}</p></center>
            <div class="level">
            <li>{{trans('education.giaPara1')}}</li>
                <a>
                <center>  
                <figure class="image is-128x128">
                  <p>Diamond Certficate</p>
                    <img src="/front_end/education/grading-certficate/pageImage.jpg">
                </figure>
                </center>
                  </a>
            </div>
            
            </center>
            <li>{{trans('education.giaPara2')}}</li>
            <li>{{trans('education.giaPara3')}}</li>
          </div>
             

          </div>
          
        </article>


        <article class="message is-primary" v-if="activedSubTab=='gia-report'">
          <div class="level is-centered">
            <div class="message-body">
            
           
            <center><p class="title is-6">{{trans('education.giaTitle1')}}</p></center>
            <div class="level">
            <li>{{trans('education.giaPara1')}}</li>
                <a>
                <center>  
                <figure class="image">
                  <p>GIA Diamond Report</p>
                    <img src="/front_end/education/grading-certficate/pageImage.jpg">
                </figure>
                </center>
                  </a>
            </div>
            {{trans('education.giaPara2')}}
            {{trans('education.giaPara3')}}

            <hr>
            <center><p class="title is-5">{{trans('education.giaTitle2')}}</p></center>
            <center><p class="title is-6">{{trans('education.giaTitle3')}}</p></center>
            <div class="level">
            <li>{{trans('education.giaPara4')}}</li>
                <a>
                <center>  
                <figure >
                  <p>GIA REPORT (PART1)</p>
                    <img width="250" src="/front_end/education/gia-report/gia1.jpg">
                </figure>
                </center>
                  </a>
            </div>
            {{trans('education.giaPara4.1')}}
            {{trans('education.giaPara5')}}
            {{trans('education.giaPara6')}}

            <hr>
            <center><p class="title is-6">{{trans('education.giaTitle4')}}</p></center>
            <div class="level">
            <li>{{trans('education.giaPara7')}}</li>
                <a>
                <center>  
                <figure >
                  <p>GIA REPORT (PART2)</p>
                    <img width="250" src="/front_end/education/gia-report/gia2.jpg">
                </figure>
                </center>
                  </a>
            </div>
            {{trans('education.giaPara7.1')}}

            <hr>
            <center><p class="title is-6">{{trans('education.giaTitle5')}}</p></center>
            <div class="level">
            <li>{{trans('education.giaPara8')}}</li>
                <a>
                <center>  
                <figure >
                  <p>GIA REPORT (PART3)</p>
                    <img width="250" height="auto" src="/front_end/education/gia-report/gia3.jpg">
                </figure>
                </center>
                  </a>
            </div>
            {{trans('education.giaPara8.1')}}

            <hr>
            <center><p class="title is-6">{{trans('education.giaTitle6')}}</p></center>
            <div class="level">
            <li>{{trans('education.giaPara9')}}</li>
                <a>
                <center>  
                <figure >
                  <p>GIA REPORT (PART3)</p>
                    <img width="250" height="auto" src="/front_end/education/gia-report/gia4.jpg">
                </figure>
                </center>
                  </a>
            </div>
            {{trans('education.giaPara9.1')}}
            {{trans('education.giaPara10')}}

            <hr>
            <center><p class="title is-6">{{trans('education.giaTitle7')}}</p></center>
            <div class="level">
            <li>{{trans('education.giaPara11')}}</li>
                <a>
                <center>  
                <figure >
                  <p>GIA REPORT (PART3)</p>
                    <img width="250" height="auto" src="/front_end/education/gia-report/gia5.jpg">
                </figure>
                </center>
                  </a>
            </div>
            {{trans('education.giaPara11.1')}}

            <hr>
            <center><p class="title is-6">{{trans('education.giaTitle8')}}</p></center>
            <div class="level">
            <li>{{trans('education.giaPara12')}}</li>
                <a>
                <center>  
                <figure >
                  <p>GIA REPORT (PART3)</p>
                    <img width="250" height="auto" src="/front_end/education/gia-report/gia6.jpg">
                </figure>
                </center>
                  </a>
            </div>
            {{trans('education.giaPara12.1')}}
             
          </div>
          </div>
          
        </article>



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
