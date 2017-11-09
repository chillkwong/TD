<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Diamond Shape</title>

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
                            <img width="400" :src="'/front_end/education/' + activedSubTab +'/pageImage.jpg'" class="">
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
            <li :class="{'is-active': activedSubTab=='shape' }" @click="activeSubTab('shape')" ><a>Diamond Shape</a></li>
            <li :class="{'is-active': activedSubTab=='gia-report' }" @click="activeSubTab('gia-report')" ><a>Gia Report </a></li>
            <li :class="{'is-active': activedSubTab=='grading-eye-clean' }" @click="activeSubTab('grading-eye-clean')"><a>Eye Clean Diamond</a></li>
           
            
          </ul>
        </div>

        <div v-if="activedSubTab=='shape'">
        <article class="message is-primary" >
            <div class="level is-centered">
            
            <div class="tile is-ancestor">
                  <div class="tile is-10">
                
                        <div class="message-body">
                        <center>

                            <center><p class="title is-6">{{trans('diamondShape.ASSHER CUT')}}</p>
                            </center>
                            <div class="level">
                            <li>{{trans('diamondShape.shapePara1')}}</li>
                               
                            </div>
                        
                        </center>
                        
                      </div>
                         
                  </div>

              <div class="tile">

             <a class="box">
                <center>  
                    <figure class="image">
                      <p>ASSHER CUT DIAMOND</p>
                        <img  src="/front_end/education/shape/asscher-glam-1-150x150.jpg">
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

                            <center><p class="title is-6">{{trans('diamondShape.ROUND BRILLIANT CUT ')}}</p>
                            </center>
                            <div class="level">
                            <li>{{trans('diamondShape.shapePara2')}}</li>
                               
                            </div>
                        
                        </center>
                        
                      </div>
                         
                  </div>

              <div class="tile">

             <a class="box">
                <center>  
                    <figure class="image">
                      <p>ROUND BRILLIANT CUT DIAMOND</p>
                        <img src="/front_end/education/shape/round-brilliant-cut-2-150x150.jpg">
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

                            <center><p class="title is-6">{{trans('diamondShape.CUSHION CUT')}}</p>
                            </center>
                            <div class="level">
                            <li>{{trans('diamondShape.shapePara3')}}</li>
                               
                            </div>
                        
                        </center>
                        
                      </div>
                         
                  </div>

              <div class="tile">

             <a class="box">
                <center>  
                    <figure class="image">
                      <p>CUSHION CUT DIAMOND</p>
                        <img src="/front_end/education/shape/cushion-glam-1-150x150.jpg">
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

                            <center><p class="title is-6">{{trans('diamondShape.EMERALD CUT')}}</p>
                            </center>
                            <div class="level">
                            <li>{{trans('diamondShape.shapePara4')}}</li>
                               
                            </div>
                        
                        </center>
                        
                      </div>
                         
                  </div>

              <div class="tile">

             <a class="box">
                <center>  
                    <figure class="image">
                      <p>EMERALD CUT DIAMOND</p>
                        <img src="/front_end/education/shape/emerald-glam-1-150x150.jpg">
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

                            <center><p class="title is-6">{{trans('diamondShape.HEART SHAPE')}}</p>
                            </center>
                            <div class="level">
                            <li>{{trans('diamondShape.shapePara5')}}</li>
                               
                            </div>
                        
                        </center>
                        
                      </div>
                         
                  </div>

              <div class="tile">

             <a class="box">
                <center>  
                    <figure class="image">
                      <p>HEART SHAPE DIAMOND</p>
                        <img src="/front_end/education/shape/heart-glam-e1461491201975-1-150x150.jpg">
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

                            <center><p class="title is-6">{{trans('diamondShape.MARQUISE CUT')}}</p>
                            </center>
                            <div class="level">
                            <li>{{trans('diamondShape.shapePara6')}}</li>
                               
                            </div>
                        
                        </center>
                        
                      </div>
                         
                  </div>

              <div class="tile">

             <a class="box">
                <center>  
                    <figure class="image">
                      <p>MARQUISE CUT DIAMOND</p>
                        <img src="/front_end/education/shape/marquise-glam-1-150x150.jpg">
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

                            <center><p class="title is-6">{{trans('diamondShape.OVAL CUT')}}</p>
                            </center>
                            <div class="level">
                            <li>{{trans('diamondShape.shapePara7')}}</li>
                               
                            </div>
                        
                        </center>
                        
                      </div>
                         
                  </div>

              <div class="tile">

             <a class="box">
                <center>  
                    <figure class="image">
                      <p>OVAL CUT DIAMOND</p>
                        <img src="/front_end/education/shape/oval-glam-1-150x150.jpg">
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

                            <center><p class="title is-6">{{trans('diamondShape.PEAR SHAPE')}}</p>
                            </center>
                            <div class="level">
                            <li>{{trans('diamondShape.shapePara8')}}</li>
                               
                            </div>
                        
                        </center>
                        
                      </div>
                         
                  </div>

              <div class="tile">

             <a class="box">
                <center>  
                    <figure class="image">
                      <p>PEAR SHAPE DIAMOND</p>
                        <img src="/front_end/education/shape/pear-glam-1-150x150.jpg">
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

                            <center><p class="title is-6">{{trans('diamondShape.PRINCESS CUT')}}</p>
                            </center>
                            <div class="level">
                            <li>{{trans('diamondShape.shapePara9')}}</li>
                               
                            </div>
                        
                        </center>
                        
                      </div>
                         
                  </div>

              <div class="tile">

             <a class="box">
                <center>  
                    <figure class="image">
                      <p>PRINCESS CUT DIAMOND</p>
                        <img src="/front_end/education/shape/princess-brilliant-cut-1-150x150.jpg">
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

                            <center><p class="title is-6">{{trans('diamondShape.RADIANT CUT')}}</p>
                            </center>
                            <div class="level">
                            <li>{{trans('diamondShape.shapePara10')}}</li>
                               
                            </div>
                        
                        </center>
                        
                      </div>
                         
                  </div>

              <div class="tile">

             <a class="box">
                <center>  
                    <figure class="image">
                      <p>RADIANT CUT DIAMOND</p>
                        <img src="/front_end/education/shape/radiant-glam-1-150x150.jpg">
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
