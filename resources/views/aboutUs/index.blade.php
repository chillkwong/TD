<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>About US</title>

        <!-- Fonts -->
       
        <link rel="stylesheet" type="text/css" href="{{mix('css/app.css')}}">
       
    </head>
   
    @include('layouts.frontHeader')
    <body>
        <div id="aboutUs" class="container">
        <div class="level">
            
        </div>
        <div class="tile is-ancestor" >
            <div class="tile is-parent ">
                <div class="tile is-child notification is-primary" >
                    <center><h1 class="title is-5">About US</h1>
                        First to buy diamonds, then buy ring setting
                    </center>
                </div>
                
            </div>
        </div>
        
        <div id="buyingProcedure">
        	<div class="tabs is-centered">
              <ul>
                <li class="is-active"><a></a></li>
                <li><a></a></li>
                <li><a></a></li>
                <li><a></a></li>
                <li><a></a></li>
              </ul>
            </div>
        </div>

       
        <div class="tabs is-centered">
          <ul>
            <li :class="{'is-active': activedSubTab=='Contact Us' }" @click="activeSubTab('Contact Us')" ><a>Contact Us</a></li>
            <li :class="{'is-active': activedSubTab=='Quality Guarantee' }" @click="activeSubTab('Quality Guarantee')" ><a>Quality Guarantee </a></li>
            <li :class="{'is-active': activedSubTab=='Satification Insurence' }" @click="activeSubTab('Satification Insurence')"><a>Satification Insurence</a></li>
          </ul>
        </div>

        <div v-if="activedSubTab=='Contact Us'">


          <article class="message is-primary" >
            
            <div class="level is-centered">
            <div class="message-body">
            <div class="tile is-ancestor">
              
                  <div class="tile is-8">
                
                        
                        <center>

                            <center><p class="title is-6">{{trans('aboutUs.title1')}}</p>
                            </center>
                            <br>
                            <div class="level">
                            <li>{{trans('aboutUs.para1')}}</li>
                               
                            </div>
                        
                        </center>
                        
                      
                         
                  </div>

              <div class="tile">

             <a class="">
                <center>  
                    <figure class="image">
                      <p></p>
                        <img src="/front_end/aboutUs/address/IMG_7397.HEIC">
                    </figure>
                </center>
            </a>

            </div>
          </div>


          <hr>
           <div class="tile is-ancestor">
              
                  <div class="tile is-6">
                
                        
                        <center>
                          <br>
                            <center><p class="title is-6">{{trans('aboutUs.Quick Chat With')}} Pete</p>
                            </center>
                            <br>
                            <div class="level">
                            
                               
                            </div>
                        
                        
                        <a class="" >
                            <center>  
                              <a href="/front_end/buyingProcedure/Pete_Kwong.vcf">Mobile Import Pete</a>
                                <figure class="image">
                                    <img src="/front_end/aboutUs/pete.png">
                                </figure>
                            </center>
                        </a>
                        </center>
                      
                         
                  </div>

              <div class="tile">

                       <center>
                          <br>
                            <center><p class="title is-6">{{trans('aboutUs.Quick Chat With')}} Pete</p>
                            </center>
                            <br>
                            <div class="level">
                            
                               
                            </div>
                        
                        <a class="" >
                            <center>  
                              <a href="/front_end/buyingProcedure/Pete_Kwong.vcf">Mobile Import Pete</a>
                                <figure class="image">
                                    <img src="/front_end/aboutUs/pete.png">
                                </figure>
                            </center>
                        </a>

                        </center>

            </div>
          </div>


          <hr>
           <div class="tile is-ancestor">
              
                  <div class="tile is-5">
                
                        
                        <center>
                          <figure class="image">
                                  <p></p>
                                    <img src="/front_end/aboutUs/CCI15122016-343x240.jpg">
                                </figure>
                         
                        </center>
                      
                         
                  </div>

              <div class="tile">

                       <center>
                        <br>
                            <center><p class="title is-6">{{trans('aboutUs.British qualifier professional qualifications')}}</p>
                            </center>
                            <br>
                            <div class="">
                            <li>{{trans('aboutUs.para2')}}</li>
                            <a href="https://www.gem-a.info/">{{trans('aboutUs.para3')}}</a>
                               
                            </div>
                          

                        </center>

            </div>
          </div>

          <hr>
           <div class="tile is-ancestor">
              
                  <div class="tile is-8">
                
                        
                        <center>
                          <figure class="image">
                            <p></p>
                              <img src="/front_end/aboutUs/address/map.jpg">
                          </figure>
                         
                        </center>
                      
                         
                  </div>

              <div class="tile">

                       <center>
                        <center><p class="title is-6">{{trans('aboutUs.address')}}</p>
                            </center>
                            <br>
                            <div class="">
                            <li>{{trans('aboutUs.Office Hours')}}</li>
                            <a>{{trans('aboutUs.Monday to Friday')}}</a>
                               
                            </div>
                          

                        </center>

            </div>
          </div>


          <figure >
          <img src="/front_end/aboutUs/address/zh_map.jpg">
        </figure>


        </div>
        </article>
      </div>


        <div v-if="activedSubTab=='Quality Guarantee'">

        <article class="message is-primary" >
            
            <div class="level is-centered">
            <div class="message-body">

            <div class="tile is-ancestor">
              
                  <div class="tile is-9">
                
                        
                        <center>

                            <center><p class="title is-6">{{trans('aboutUs.title2')}}</p>
                            </center>
                            <br>
                            <div class="level">
                            <li>{{trans('aboutUs.para4')}} <a href="education-diamond-grading/gia-report/">GIA Report</a>?</li>
                               
                            </div>
                        
                        </center>
                        
                      
                         
                  </div>

              <div class="tile">

             <a class="">
                <center>  
                    <figure class="image">
                      <p></p>
                        <img src="/front_end/aboutUs/guarantee/Diamond-Grading-Report-300x139_1364898592668-300x169.jpg">
                    </figure>
                </center>
            </a>

            </div>
          </div>

          <hr>
          <div class="tile is-ancestor">
              
                  <div class="tile is-9">
                
                        
                        <center>

                            <center><p class="title is-6">{{trans('aboutUs.title3')}}</p>
                            </center>
                            <br>
                            <div class="level">
                            <li>{{trans('aboutUs.para5')}} 
                              <a href="https://www.gia.edu/">{{trans('aboutUs.GIA official website')}}
                              </a> {{trans('aboutUs.para5.1')}}</li>
                               
                            </div>
                        
                        </center>
                        
                      
                         
                  </div>

              <div class="tile">

             <a class="">
                <center>  
                    <figure class="image">
                      <p></p>
                        <img src="/front_end/aboutUs/guarantee/Photo 10-9-2017, 10 46 56 PM.jpg">
                    </figure>
                </center>
            </a>

            </div>
          </div>


          <hr>
          <div class="tile is-ancestor">
              
                  <div class="tile is-9">
                
                        
                        <center>

                            <center><p class="title is-6">{{trans('aboutUs.title4')}}</p>
                            </center>
                            <br>
                            <div class="level">
                            <li>{{trans('aboutUs.para6')}} 
                              <a href="http://presidium.com.sg/psdproduct/multi-tester-iii/">
                               {{trans('aboutUs.para6.1')}}</a></li>
                               
                            </div>
                        
                        </center>
                        
                      
                         
                  </div>

              <div class="tile">

             <a class="">
                <center>  
                    <figure class="image">
                      <p></p>
                        <img src="/front_end/aboutUs/guarantee/3-Pmut_III_full2.jpg">
                    </figure>
                </center>
            </a>

            </div>
          </div>

          <hr>
          <div class="tile is-ancestor">
              
                  <div class="tile is-9">
                
                        
                        <center>

                            <center><p class="title is-6">{{trans('aboutUs.title5')}}</p>
                            </center>
                            <br>
                            <div class="level">
                            <li>{{trans('aboutUs.para7')}} 
                              <a href="http://presidium.com.sg/psdproduct/multi-tester-iii/">
                               </a></li>
                               
                            </div>
                        
                        </center>
                        
                      
                         
                  </div>

              <div class="tile">

             <a class="">
                <center>  
                    <figure class="image">
                      <p></p>
                        <img src="/front_end/aboutUs/guarantee/HK-Welcome-522x311_1355960572014.jpg">
                    </figure>
                </center>
            </a>

            </div>
          </div>



              
          </div>

          </div>
        </article>

        

      </div>



      <div v-if="activedSubTab=='Satification Insurence'">

        <article class="message is-primary" >
            
            <div class="level is-centered">
            <div class="message-body">

            <div class="tile is-ancestor">
              
                  <div class="tile is-3">
                    <a class="">
                        <center>  
                            <figure class="image">
                              <p></p>
                                <img src="/front_end/aboutUs/insurence/HS_EngagementGuide_RingSizer-539x303.jpg">
                            </figure>
                        </center>
                    </a>
                        
                  </div>

              <div class="tile">

                  <center>

                        <center><p class="title is-6">{{trans('aboutUs.title6')}}</p>
                        </center>
                        <br>
                        <div class="level">
                        <li>{{trans('aboutUs.para8')}}</li>
                           
                        </div>
                    
                    </center>

             

            </div>
          </div>

          <hr>
          <div class="tile is-ancestor">
              
                  <div class="tile is-3">
                    <a class="">
                        <center>  
                            <figure class="image">
                              <p></p>
                                <img src="/front_end/aboutUs/insurence/Sterling-Silver-My-Heart-is-Yours-Engraved-CZ-Heart-Promise-Ring-MLA14618486.jpg">
                            </figure>
                        </center>
                    </a>
                        
                  </div>

              <div class="tile">

                  <center>

                        <center><p class="title is-6">{{trans('aboutUs.title7')}}</p>
                        </center>
                        <br>
                        <div class="level">
                        <li>{{trans('aboutUs.para9')}}</li>
                           
                        </div>
                    
                    </center>

             

            </div>
          </div>

          <hr>
          <div class="tile is-ancestor">
              
                  <div class="tile is-3">
                    <a class="">
                        <center>  
                            <figure class="image">
                              <p></p>
                                <img src="/front_end/aboutUs/insurence/130218-hero_1356018657153.jpg">
                            </figure>
                        </center>
                    </a>
                        
                  </div>

              <div class="tile">

                  <center>

                        <center><p class="title is-6">{{trans('aboutUs.title8')}}</p>
                        </center>
                        <br>
                        <div class="level">
                        <li>{{trans('aboutUs.para10')}}</li>
                           
                        </div>
                    
                    </center>

             

            </div>
          </div>

          <hr>
          <div class="tile is-ancestor">
              
                  <div class="tile is-3">
                    <a class="">
                        <center>  
                            <figure class="image">
                              <p></p>
                                <img src="/front_end/aboutUs/insurence/diamondup-img.jpg">
                            </figure>
                        </center>
                    </a>
                        
                  </div>

              <div class="tile">

                  <center>

                        <center><p class="title is-6">{{trans('aboutUs.title9')}}</p>
                        </center>
                        <br>
                        <div class="level">
                        <li>{{trans('aboutUs.para11')}}</li>
                           
                        </div>
                    
                    </center>

             

            </div>
          </div>

          <hr>
          <div class="tile is-ancestor">
              
                  <div class="tile is-3">
                    <a class="">
                        <center>  
                            <figure class="image">
                              <p></p>
                                <img src="/front_end/aboutUs/insurence/Photo-11-9-2016-1-07-18-PM_1-700x525.jpg">
                            </figure>
                        </center>
                    </a>
                        
                  </div>

              <div class="tile">

                  <center>

                        <center><p class="title is-6">{{trans('aboutUs.title10')}}</p>
                        </center>
                        <br>
                        <div class="level">
                        <li>{{trans('aboutUs.para12')}}</li>
                           
                        </div>
                    
                    </center>

             

            </div>
          </div>



              
          </div>

          </div>
        </article>

        

      </div>







        </div>



    @include('layouts.frontFooter')



    


</body>



</html>
