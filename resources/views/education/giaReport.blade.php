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
                        <figure>
                            <img  :src="'/front_end/education/' + activedSubTab +'/pageImage.jpg'" class="">
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
            <p class="title is-6">{{trans('education.giaTitle1')}}</p>
            <div class="level">
            <li>{{trans('education.giaPara1')}}</li>
                <a>
                <center>  
                <figure class="image is-128x128">
                  <p>Diamond Carat & Size</p>
                    <img src="/front_end/education/gia-report/pageImage.jpg">
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


        <article class="message is-primary" v-if="activedSubTab=='cut'">
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


        <article class="message is-primary" v-if="activedSubTab=='color'">
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


        <article class="message is-primary" v-if="activedSubTab=='clarity'">
          <div class="level is-centered">
            <div class="message-body">
            
            <center>
            <p class="title is-6">{{trans('education.clarityTitle1')}}</p>
            <div class="level">
            <li>{{trans('education.clarityPara1')}}</li>
                <a>
                <center>  
                <figure class="image is-128x128">
                  <p>Diamond Clarity</p>
                    <img src="/front_end/education/clarity/pageImage.jpg">
                </figure>
                </center>
                  </a>
            </div>
            <li>{{trans('education.clarityPara2')}}</li>

            <figure class="image">
                  <p>Diamond Clarity</p>
                    <img src="/front_end/education/clarity/1100808_orig.jpg">
            </figure>

            </center>

          </div>
          </div>
          
        </article>



        </div>



    @include('layouts.frontFooter')


</body>



</html>
