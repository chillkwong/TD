<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Show Engagement Rings</title>

        <!-- Fonts -->
       
        <link rel="stylesheet" type="text/css" href="{{mix('css/app.css')}}">
       
    </head>
   
    @include('layouts.frontHeader')
    <body>
        <div id="customerJewellryShow">
        	<div class="container">
                <div class="level">
                </div>
                <div class="tile is-vertical">
                    <article class="tile is-child box is-primary">
                        <div class="columns">
                            <div class="column">
                                <figure class="image"><img :src="`/images/${post.cover}`"></figure>
                            </div>
                        </div>
                    </article>
                </div>

                

                <div class="tile box">
                    <div class="tile notification is-primary">
                            <p class="title">@{{post.contents[0].content}}</p>
                    </div>       
                </div>

                <div class="tile is-ancestor " v-if="invoice[0].inv_diamonds[0]">
                    <div class="tile is-parent is-4">
                        <div class="tile is-child box">

                            <div class="tile is-chill">
                            <article>
                                <p>
                                {{trans('diamondSearch.giaShare')}}客人珠寶首飾分享，可作參考。
                                {{trans('diamondSearch.For more detailed')}}：
                                </p>
                                <a :href="`https://www.gia.edu/report-check?reportno=${invoice[0].inv_diamonds[0].certificate}`"><center>GIA Certificate</center><figure class="image"><img src="https://www.gia.edu/onlineopinionV5/GIA-Logo.png"></figure></a>
                            </article>
                            </div>
                            <article>
                                <table class="table is-striped is-fullwidth">
                                <thead>
                                    <tr>
                                        <th>Diamond Info( @{{invoice[0].inv_diamonds[0].shape}} )</th>
                                    </tr>
                                </thead>
                                    
                                <tbody>
                                    <tr><td>Carat Weight</td><td>@{{invoice[0].inv_diamonds[0].weight}}</td></tr>
                                    <tr><td>Color Grade</td><td>@{{invoice[0].inv_diamonds[0].color}}</td></tr>
                                    <tr><td>Clarity Grade</td><td>@{{invoice[0].inv_diamonds[0].clarity}}</td></tr>
                                    <tr><td>Cut Grade</td><td>@{{invoice[0].inv_diamonds[0].cut}}</td></tr>
                                </tbody>

                                <thead>
                                    <tr>
                                        <th>Finish</th>
                                    </tr>
                                </thead>
                                    
                                <tbody>
                                    <tr><td>Polish</td><td>@{{invoice[0].inv_diamonds[0].polish}}</td></tr>
                                    <tr><td>Symmetry</td><td>@{{invoice[0].inv_diamonds[0].symmetry}}</td></tr>
                                </tbody>

                                <thead>
                                    <tr>
                                        <th>Fluorescence</th>
                                    </tr>
                                </thead>
                                    
                                <tbody>
                                    <tr><td>Fluorescence</td><td>@{{invoice[0].inv_diamonds[0].fluorescence}}</td></tr>
                                </tbody>
                                
                                <thead>
                                    <tr>
                                        <th>Certificate</th>
                                    </tr>
                                </thead>
                                    
                                <tbody>
                                    <a :href="`https://www.gia.edu/report-check?reportno=${invoice[0].inv_diamonds[0].certificate}`">
                                    <tr><td>Certificate</td><td>@{{invoice[0].inv_diamonds[0].certificate}}</td></tr>
                                    </a>
                                </tbody>

                                </table>
                            </article>

                            
                        </div>
                    </div>

                    <div class="tile is-parent" v-if="post.image1">
                            <div class="tile is-child box">
                                <a :href="`https://www.gia.edu/report-check?reportno=${invoice[0].inv_diamonds[0].certificate}`">
                                    <figure class="image">
                                    <img :src="`/images/${post.image1}`">
                                    </figure>
                                </a>
                            </div>
                        </div>
                </div>


                <div class="tile is-ancestor notification is-primary" v-if="post.image2">
                    <div class="tile is-parent">
                        <div class="tile is-child is-7">
                            <article>
                                <figure><img :src="`/images/${post.image2}`"></figure>
                            </article>
                            
                        </div>
                        <div class="tile is-child">
                            <article>
                                <figure>
                                    <img src="/front_end/diamond/GIA-Laser-Inscription-girdle.jpg">
                                </figure>
                                <p class="subtitle">
                                鑽石腰部編號就好像是人的身份證，用來確認鑽石它的4Cs，到底是什麼那些級別。
                                </p>
                            </article>
                            
                        </div>
                        
                    </div>
                    
                </div>


                <div class="tile is-ancestor" v-if="invoice[0].engagement_rings[0]">
                    <div class="tile is-parent is-6">
                            <div class="tile is-child box">
                                <a :href=" langHref +'/engagement_rings/' + invoice[0].engagement_rings[0].id">
                                    <figure class="image">
                                    <img :src="`/images/${invoice[0].engagement_rings[0].cover}`">
                                    </figure>
                                </a>
                                <a :href=" langHref +'/engagement_rings/' + invoice[0].engagement_rings[0].id">
                                    <figure class="image">
                                    <img :src="`/images/${invoice[0].engagement_rings[0].image1}`">
                                    </figure>
                                </a>
                            </div>
                        </div>

                    <div class="tile is-parent" >
                        <div class="tile is-child box">
                            <article>
                                <div>
                                  <p>
                                    <iframe width="90%" height="315" :src="youtube + `${invoice[0].engagement_rings[0].video}`" frameborder="0" allowfullscreen></iframe>
                                  </p>
                                 </div>
                                <table class="table is-striped is-fullwidth">
                                <thead>
                                    <tr>
                                        <th>Engagement Ring Info</th>
                                    </tr>
                                </thead>
                                    
                                <tbody> 
                                    <tr><td>Shoulder</td><td>@{{invoice[0].engagement_rings[0].shoulder}}</td></tr>
                                    <tr><td>Prong</td><td>@{{invoice[0].engagement_rings[0].prong}}</td></tr>
                                    <tr><td>Side stone</td><td>@{{invoice[0].engagement_rings[0].ct}}ct</td></tr>

                                    <thead>
                                    <tr>
                                        <th>Engagement Ring Info</th>
                                    </tr>
                                    </thead>
                                    <tr><td>Stock No.</td><td>@{{invoice[0].engagement_rings[0].stock}}</td></tr> 
                                    <tr><td>Title</td><td>@{{invoice[0].engagement_rings[0].name}}</td></tr>
                                    <tr><td>Description</td><td>@{{invoice[0].engagement_rings[0].style | transJs(langs,locale)}},@{{invoice[0].engagement_rings[0].prong | transJs(langs,locale)}},@{{invoice[0].engagement_rings[0].shoulder | transJs(langs,locale)}},{{trans('engagementRing.setting')}}</td></tr>
                                    
                                </tbody>

                                </table>
                            </article>                            
                        </div>
                    </div>   
                </div>

                <div class="tile is-ancestor" v-if="invoice[0].jewellries[0]">
                    <div class="tile is-parent is-6">
                            <div class="tile is-child box">
                                <a :href=" langHref +'/jewellries/' + invoice[0].jewellries[0].id">
                                    <figure class="image">
                                    <img :src="`/images/${invoice[0].jewellries[0].cover}`">
                                    </figure>
                                </a>
                                <a :href=" langHref +'/jewellries/' + invoice[0].jewellries[0].id">
                                    <figure class="image">
                                    <img :src="`/images/${invoice[0].jewellries[0].image1}`">
                                    </figure>
                                </a>
                            </div>
                        </div>

                    <div class="tile is-parent" >
                        <div class="tile is-child box">
                            <article>
                                <div>
                                  <p>
                                    <iframe width="90%" height="315" :src="youtube + `${invoice[0].jewellries[0].video}`" frameborder="0" allowfullscreen></iframe>
                                  </p>
                                 </div>
                                <table class="table is-striped is-fullwidth">
                                <thead>
                                    <tr>
                                        <th>Jewellry Info</th>
                                    </tr>
                                </thead>
                                    
                                <tbody>
                                    <tr><td>Stock No.</td><td>@{{invoice[0].jewellries[0].stock}}</td></tr>  
                                    <tr><td>Title</td><td>@{{invoice[0].jewellries[0].name}}</td></tr>
                                    <tr><td>Description</td><td>@{{invoice[0].jewellries[0].description}}</td></tr>
                                    <tr><td>Side stone</td><td>@{{invoice[0].jewellries[0].ct}}</td></tr>
                                    <tr><td>Mounting</td><td>@{{invoice[0].jewellries[0].mounting}}</td></tr>
                                </tbody>

                                </table>
                            </article>                            
                        </div>
                    </div>   
                </div>



                <div class="tile is-ancestor" v-if="invoice[0].wedding_rings[0]">
                    <div class="tile is-parent is-6">
                            <div class="tile is-child box">
                                <a :href=" langHref +'/wedding_rings/' + invoice[0].wedding_rings[0].id">
                                    <figure class="image">
                                    <img :src="`/images/${invoice[0].wedding_rings[0].image1}`">
                                    </figure>
                                </a>
                                <a :href=" langHref +'/wedding_rings/' + invoice[0].wedding_rings[0].id">
                                    <figure class="image">
                                    <img :src="`/images/${invoice[0].wedding_rings[0].image2}`">
                                    </figure>
                                </a>
                            </div>
                        </div>

                    <div class="tile is-parent" >
                        <div class="tile is-child box">
                            <article>
                                <div>
                                  <p>
                                    <iframe width="90%" height="315" :src="youtube + `${invoice[0].wedding_rings[0].video}`" frameborder="0" allowfullscreen></iframe>
                                  </p>
                                 </div>
                                <table class="table is-striped is-fullwidth">
                                <thead>
                                    <tr>
                                        <th>Wedding Ring Info - @{{invoice[0].wedding_rings[0].gender | transJs(langs,locale)}}</th>
                                    </tr>
                                </thead>
                                    
                                <tbody>
                                    <tr><td>Metal</td><td>@{{invoice[0].wedding_rings[0].metal}}</td></tr>
                                    <tr><td>Side stone</td><td>@{{invoice[0].wedding_rings[0].ct}}ct</td></tr>
                                    <tr><td>Stock No.</td><td>@{{invoice[0].wedding_rings[0].stock}}</td></tr>  
                                    <tr><td>Title</td><td>@{{invoice[0].wedding_rings[0].name}}</td></tr>
                                    <tr><td>Description</td><td>@{{invoice[0].wedding_rings[0].style | transJs(langs,locale)}},@{{invoice[0].wedding_rings[0].metal | transJs(langs,locale)}},@{{invoice[0].wedding_rings[0].sideStone? transJsMet('ct',langs,locale):''}}
                                    {{trans('weddingRing.Wedding Ring')}}</td></tr>
                              
                                </tbody>

                                </table>
                            </article>                            
                        </div>
                    </div>   
                </div>


                <div class="tile is-ancestor" v-if="invoice[0].wedding_rings[1]">
                    <div class="tile is-parent is-6">
                            <div class="tile is-child box">
                                <a :href=" langHref +'/wedding_rings/' + invoice[0].wedding_rings[1].id">
                                    <figure class="image">
                                    <img :src="`/images/${invoice[0].wedding_rings[1].image1}`">
                                    </figure>
                                </a>
                                <a :href=" langHref +'/wedding_rings/' + invoice[0].wedding_rings[1].id">
                                    <figure class="image">
                                    <img :src="`/images/${invoice[0].wedding_rings[1].image2}`">
                                    </figure>
                                </a>
                            </div>
                        </div>

                    <div class="tile is-parent" >
                        <div class="tile is-child box">
                            <article>
                                <div>
                                  <p>
                                    <iframe width="90%" height="315" :src="youtube + `${invoice[0].wedding_rings[1].video}`" frameborder="0" allowfullscreen></iframe>
                                  </p>
                                 </div>
                                <table class="table is-striped is-fullwidth">
                                <thead>
                                    <tr>
                                        <th>Wedding Ring Info - @{{invoice[0].wedding_rings[1].gender | transJs(langs,locale)}}</th>
                                    </tr>
                                </thead>
                                    
                                <tbody>
                                    <tr><td>Metal</td><td>@{{invoice[0].wedding_rings[1].metal}}</td></tr>
                                    <tr><td>Side stone</td><td>@{{invoice[0].wedding_rings[1].ct}}ct</td></tr>
                                    <tr><td>Stock No.</td><td>@{{invoice[0].wedding_rings[1].stock}}</td></tr>  
                                    <tr><td>Title</td><td>@{{invoice[0].wedding_rings[1].name}}</td></tr>
                                    <tr><td>Description</td><td>@{{invoice[0].wedding_rings[1].style | transJs(langs,locale)}},@{{invoice[0].wedding_rings[1].metal | transJs(langs,locale)}},@{{invoice[0].wedding_rings[1].sideStone? transJsMet('ct',langs,locale):''}}
                                    {{trans('weddingRing.Wedding Ring')}}</td></tr>
                                </tbody>

                                </table>
                            </article>                            
                        </div>
                    </div>   
                </div>


                <nav class="level" v-if="post.id">
                    <p class="level-item has-text-centered">
                    <label>Product video</label>
                    </p>
                </nav>
                <nav class="level">
                  <p class="level-item has-text-centered">
                    <iframe width="90%" height="555" :src="youtube + `${post.video}`" frameborder="0" allowfullscreen></iframe>
                  </p>
                 </nav>

               
                
            </div>
        </div>


    @include('layouts.frontFooter')

  


</body>



</html>
