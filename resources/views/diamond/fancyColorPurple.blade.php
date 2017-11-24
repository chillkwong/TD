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
        <title>{{trans('searchDiamond.Fancy Color Diamonds')}}</title>
        <meta name="description" content="{{trans('searchDiamond.Fancy Color  Diamonds')}}" />

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
       
    </head>
   
    @include('layouts.frontHeader')
    <body>
            <div class="container">
            <div class="level">
                
            </div>
            <div class="tile is-ancestor" >
                <div class="tile is-parent ">
                    <div class="tile is-child notification is-primary" >
                        <center><h1 class="title is-5">{{trans('diamondSearch.Fancy Color Diamonds')}}</h1>
                            
                        </center>
                    </div>
                    
                </div>
            </div>
            </div>
            @include('layouts.maintenance')

            <div id="diamondViewerIndex">
                <div class="box">
        <div class="level">

        </div>

                  

        </div>
        	
        </div>


    @include('layouts.frontFooter')

  

</body>



</html>
