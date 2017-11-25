<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Update your html tag to include the itemscope and itemtype attributes. --> 
        <html itemscope itemtype="http://schema.org/Article">

        <!-- Place this data between the <head> tags of your website --> 
        <title>{{trans('searchDiamond.Search Diamonds')}}</title>
        <meta name="description" content="{{trans('searchDiamond.Search Diamonds')}}" />

        <!-- Google Authorship and Publisher Markup --> 
        <link rel="author" href=" https://plus.google.com/[Google+_Profile]/posts"/>
        <link rel="publisher" href=” https://plus.google.com/[Google+_Page_Profile]"/>

        <!-- Schema.org markup for Google+ --> 
        <meta itemprop="name" content="The Name or Title Here"> 
        <meta itemprop="description" content="This is the page description"> 
        <meta itemprop="image" content=" http://www.example.com/image.jpg">

        <!-- Twitter Card data --> 
        <meta name="twitter:card" content="summary_large_image"> 
        <meta name="twitter:site" content="@publisher_handle"> 
        <meta name="twitter:title" content="Page Title"> 
        <meta name="twitter:description" content="Page description less than 200 characters"> 
        <meta name="twitter:creator" content="@author_handle"> 
        <!-- Twitter summary card with large image must be at least 280x150px --> 
        <meta name="twitter:image:src" content=" http://www.example.com/image.html">

        <!-- Open Graph data --> 
        <meta property="og:title" content="Title Here" /> 
        <meta property="og:type" content="article" /> 
        <meta property="og:url" content=" http://www.example.com/" />
        <meta property="og:image" content=" http://example.com/image.jpg" />
        <meta property="og:description" content="Description Here" /> 
        <meta property="og:site_name" content="Site Name, i.e. Moz" /> 
        <meta property="article:published_time" content="2013-09-17T05:59:00+01:00" /> 
        <meta property="article:modified_time" content="2013-09-16T19:08:47+01:00" /> 
        <meta property="article:section" content="Article Section" /> 
        <meta property="article:tag" content="Article Tag" /> 
        <meta property="fb:admins" content="Facebook numberic ID" />

        <!-- Fonts -->
       
        <link rel="stylesheet" type="text/css" href="{{mix('css/app.css')}}">
        <link href="//vjs.zencdn.net/5.19/video-js.min.css" rel="stylesheet">
        <style>
        #carousel  {
            background-image: url("/front_end/home/dreamstime.jpg");
            background-size: cover;
            background-position: center; 
            background-repeat: no-repeat;
            padding: 150px;
        }

        #education {
            background-color: rgb(250, 250, 250);
        }

        </style>
       
    </head>

    @include('layouts.frontHeader')
    <body>
        <div id="home">
            
  
            <div class="level">
                
            </div>


            <div class="tile is-ancestor" >
                
                    <div class="tile notification is-primary" id="carousel">
                        <center>
                            <h1 class="title is-5">{{trans('home.Diamond Price')}}</h1>
                        </center>

                    </div>
                 
            </div>

            <nav class="level">
              <p class="level-item has-text-centered">
                <a class="link is-info"><img src="/front_end/home/diamond-open-access.-ua.png" width="240">{{trans('home.Start With Diamonds')}}</a>
              </p>
              <p class="level-item has-text-centered">
                <a class="link is-info"><img src="/front_end/home/IMG_0110_1-e147374240035.png" width="240">{{trans('home.Start With Wedding Rings')}}</a>
              </p>
            </nav>

            <div id="education">
                <div class="level">
                    <div class="level-item">
                    <a class="title is-5">Diamond Education</a>
                    </div>
                </div>
                <div class="tile is-ancestor" >
                    
                        <div class="tile is-6">
                            <center>
                                <a class="title is-6"><strong>{{trans('home.Must Watch')}}:</strong> {{trans('home.GIA Teaches You 4Cs')}}</a>
                            
                                <video id="example_video_1" class="video-js vjs-default-skin"
                                  controls preload="auto" width="500" height="264"
                                  poster="/front_end/home/gia_video.jpg"
                                  data-setup='{"example_option":true}'>
                                 <source src="/front_end/home/GIA_10mins.mp4" type="video/mp4" />
                                 <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
                                </video>
                            </center>

                        </div>
                        <div class="tile">
                            <center>
                                <a class="">{{trans('home.title1')}}</a>
                                <br>
                                <p1 class="title is-6">{{trans('home.para1')}}</p1>
                            </center>
                        </div>
                     
                </div>

                

            </div>

            

            <p>1123</p>
            
                  

        	
    </div>

    @include('layouts.frontFooter')


<script src="//vjs.zencdn.net/5.19/video.min.js"></script>
</body>






</html>
