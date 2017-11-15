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

        <article class="message is-info" >
            
            <div class="level is-centered">
            
            <div class="tile is-ancestor">
                  <div class="tile is-8">
                
                        <div class="message-body">
                        <center>

                            <center><p class="title is-6">{{trans('aboutUs.title1')}}</p>
                            </center>
                            <br>
                            <div class="level">
                            <li>{{trans('aboutUs.para1')}}</li>
                               
                            </div>
                        
                        </center>
                        
                      </div>
                         
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
        </article>

        <article class="message is-info" >
            
            <div class="level is-centered">
            
            <div class="tile is-ancestor">
                  <div class="tile is-6">
                
                        <div class="">
                        <center>
                          <br>
                            <center><p class="title is-6">{{trans('aboutUs.Quick Chat With')}} Winnie</p>
                            </center>
                            <br>
                            <div class="level">
                            
                               
                            </div>
                        
                        </center>
                        <a class="">
                            <center>  
                                <figure class="image">
                                  <a href="/front_end/buyingProcedure/Winnie_Kwong.vcf">Mobile Import Winnie</a>
                                    <img src="/front_end/aboutUs/ting.png">
                                </figure>
                            </center>
                        </a>
                        
                      </div>
                         
                  </div>

                 <div class="tile is-6">
                
                        <div class="">
                        <center>
                          <br>
                            <center><p class="title is-6">{{trans('aboutUs.Quick Chat With')}} Pete</p>
                            </center>
                            <br>
                            <div class="level">
                            
                               
                            </div>
                        
                        </center>
                        <a class="" >
                            <center>  
                                <figure class="image">
                                  <a href="/front_end/buyingProcedure/Pete_Kwong.vcf">Mobile Import Pete</a>
                                    <img src="/front_end/aboutUs/pete.png">
                                </figure>
                            </center>
                        </a>
                        
                      </div>
                         
                  </div>


              

        </div>
        </article>

        <article class="message is-info" >
            
            <div class="level is-centered">
            
            <div class="tile is-ancestor">
                  <div class="tile is-5">
                
                        <div class="">

                          <a class="">
                            <center>  
                                <figure class="image">
                                  <p></p>
                                    <img src="/front_end/aboutUs/CCI15122016-343x240.jpg">
                                </figure>
                            </center>
                        </a>
                        
                        
                      </div>
                         
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
        </article>

        <article class="message is-info" >
            
            <div class="level is-centered">
            
            <div class="tile is-ancestor">
                  <div class="tile is-8">
                
                   <a class="">
                      <center>  
                          <figure class="image">
                            <p></p>
                              <img src="/front_end/aboutUs/address/map.jpg">
                          </figure>
                      </center>
                  </a>

                  </div>

              <div class="tile">

                <div class="message-body">
                    <br>
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

        </div>

        </article>

        <figure >
          <img src="/front_end/aboutUs/address/zh_map.jpg">
        </figure>

      </div>

        

        <div v-if="activedSubTab=='Quality Guarantee'">

        <article class="message is-info" >
            
            <div class="level is-centered">
            
            <div class="tile is-ancestor">
                  <div class="tile is-8">
                
                        <div class="message-body">
                        <center>

                            <center><p class="title is-6">{{trans('aboutUs.title1')}}</p>
                            </center>
                            <br>
                            <div class="level">
                            <li>{{trans('aboutUs.para1')}}</li>
                               
                            </div>
                        
                        </center>
                        
                      </div>
                         
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
        </article>

        

      </div>






        </div>



    @include('layouts.frontFooter')



    


</body>



</html>
