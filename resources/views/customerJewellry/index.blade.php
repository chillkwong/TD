<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Search Engagement Ring</title>

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
                   <center><h1 class="title is-5">Customer moments - Customer Jewelrries</h1>
                    
                        
                        <h1 >
                        Thank you for customers support, so that we could share their precious moments.
                        </h1>
                        
                    
                        <h1 >
                        Things worth celebrating in Life are too much. Know how to cherish, everthings now we had are the best.
                        </h1>
                    
                    </center>
                </div>
                
            </div>
        </div>
        </div>
        
        <div id="customerJewellryIndex">
        	<div class="box">
        <div class="columns">
            <div class="column">
            </div>
        </div>

        
        <div class="tile is-ancestor" v-for="pos in posts">
            <div class="tile is-parent is-4" v-for="post in pos">
                <div class="tile is-child" v-if="post">
                    <article class="tile">
                        <a @click="clickRow(post)">
                            <img :src="`/images/${post.cover}`" v-if="post.cover">
                            <center>
                            <p class="subtitle" v-if="post.contents[0]">@{{post.contents[0].content}}</p>
                        </center>
                        </a>
                        
                    </article>
                </div>
            </div>
        </div>


    </div>
        </div>


    @include('layouts.frontFooter')

  

</body>



</html>
