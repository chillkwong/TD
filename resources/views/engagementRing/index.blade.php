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
                    <center><h1 class="title is-5">{{trans('engagementRing.Engagement Rings - Solitaire')}}</h1>
                        <h1 >
                        {{trans('engagementRing.indexDescription')}}
                        </h1>
                    
                    </center>
                </div>
                
            </div>
        </div>
        </div>
        
        <div id="engagementRings">
        	<div class="box">
                <div class="level">

                </div>

                    <!-- <div class="tile is-ancestor" >
                        <div class="tile is-parent ">
                            <div class="tile is-child notification is-primary" >
                                <center><h1 class="title is-5">Engagement Rings - Solitaire</h1>
                                    <h1 >
                                    Thank you for customers support, so that we could share their precious moments.
                                    </h1>
                                
                                </center>
                            </div>
                            
                        </div>
                    </div> -->

                <nav >
                    <div class="navbar-item is-hidden-mobile">
                    <div class="tile is-ancestor">
                        <div class="tile is-12">
                            <div class="tile is-parent">
                                <article class="tile is-child box is-4" >
                                    <div>{{trans('engagementRing.Style')}}</div>
                                    <button v-for="(value, index) in query.search_conditions.style" class="button " :class=" {'is-info active' : query.search_conditions.style[index].clicked} " type="button" @click="toggleValue(query.search_conditions.style[index].clicked,'style', index)">
                                    <img :src="'/front_end/engagementRing/'+query.search_conditions.style[index].description + '.png'" height="40" width="55">
                                    @{{query.search_conditions.style[index].display | transJs(langs,locale)}}
                                    </button>
                                </article>

                                <article class="tile is-child box is-4" >
                                    <div>{{trans('engagementRing.Shoulder')}}</div>
                                    <button v-for="(value, index) in query.search_conditions.shoulder " class=" button " :class=" {'is-info active' : query.search_conditions.shoulder[index].clicked} " type="button" @click="toggleValue(query.search_conditions.shoulder[index].clicked,'shoulder', index)" >
                                    <img :src="'/front_end/engagementRing/'+query.search_conditions.shoulder[index].description + '.png'" height="40" width="55">
                                    @{{query.search_conditions.shoulder[index].display | transJs(langs,locale)}}
                                    </button>
                                </article>

                                <article class="tile is-child box is-2" >
                                    <div>{{trans('engagementRing.Claw Prong')}}</div>
                                    <input v-for="(value, index) in query.search_conditions.prong " class=" button " :class=" {'is-info active' : query.search_conditions.prong[index].clicked} " type="button" @click="toggleValue(query.search_conditions.prong[index].clicked,'prong', index)" :value="query.search_conditions.prong[index].display | transJs(langs,locale)"> 
                                </article>

                                <article class="tile is-child box is-2" >
                                    <div>{{trans('engagementRing.Custom-make')}}</div>
                                    <input v-for="(value, index) in query.search_conditions.customized " class=" button " :class=" {'is-info active' : query.search_conditions.customized[index].clicked} " type="button" @click="toggleValue(query.search_conditions.customized[index].clicked,'customized', index)" :value="query.search_conditions.customized[index].display | transJs(langs,locale)"> 
                                </article>
                            </div>
                        </div>
                    </div>

                  </div>
                </nav>



            <nav >
            <div class="navbar-item is-hidden-desktop is-hidden-tablet is-centered">

            <div @click="showModal=!showModal">

            <center>
            <button class="button is-info "> {{trans('engagementRing.Search Engagement Rings')}}</button>
            </center>

            <div class="modal" :class="{ 'is-active':showModal}">
              <div class="modal-background"></div>
              <div class="modal-card">
               <!--  <header class="modal-card-head">
                  <p class="modal-card-title">Modal title</p>
                  <button class="delete" aria-label="close"></button>
                </header> -->
                <section class="modal-card-body" @click="showModal=!showModal">
                  <!-- Content ... -->
                
                
                    <div class="tile is-ancestor">
                        <div class="tile is-12">
                            <div class="tile is-parent">
                                <article class="tile is-child box" >
                                    <div>{{trans('engagementRing.Style')}}</div>
                                      <button v-for="(value, index) in query.search_conditions.style" class="button " :class=" {'is-info active' : query.search_conditions.style[index].clicked} " type="button" @click="toggleValue(query.search_conditions.style[index].clicked,'style', index)">
                                    <img :src="'/front_end/engagementRing/'+query.search_conditions.style[index].description + '.png'" height="40" width="55">
                                    @{{query.search_conditions.style[index].display | transJs(langs,locale)}}
                                    </button>
                                </article>

                                <article class="tile is-child box" >
                                    <div>{{trans('engagementRing.Shoulder')}}</div>
                                    <button v-for="(value, index) in query.search_conditions.shoulder " class=" button " :class=" {'is-info active' : query.search_conditions.shoulder[index].clicked} " type="button" @click="toggleValue(query.search_conditions.shoulder[index].clicked,'shoulder', index)" >
                                    <img :src="'/front_end/engagementRing/'+query.search_conditions.shoulder[index].description + '.png'" height="40" width="55">
                                    @{{query.search_conditions.shoulder[index].display | transJs(langs,locale)}}
                                    </button>
                                </article>

                                <article class="tile is-child box" >
                                    <div>{{trans('engagementRing.Claw Prong')}}</div>
                                    <input v-for="(value, index) in query.search_conditions.prong " class=" button " :class=" {'is-info active' : query.search_conditions.prong[index].clicked} " type="button" @click="toggleValue(query.search_conditions.prong[index].clicked,'prong', index)" :value="query.search_conditions.prong[index].display| transJs(langs,locale)"> 
                                </article>

                                <article class="tile is-child box" >
                                    <div>{{trans('engagementRing.Custom-make')}}</div>
                                    <input v-for="(value, index) in query.search_conditions.customized " class=" button " :class=" {'is-info active' : query.search_conditions.customized[index].clicked} " type="button" @click="toggleValue(query.search_conditions.customized[index].clicked,'customized', index)" :value="query.search_conditions.customized[index].display| transJs(langs,locale)"> 
                                </article>
                            </div>
                        </div>
                    </div>


                </section>
                <footer class="modal-card-foot">
                  <button class="button is-success">{{trans('engagementRing.Submit')}}</button>
            <!--       <button class="button">Cancel</button>
             -->    </footer>
              </div>
            </div>
            </div>
            </div>
                </nav>


                
                    <div class="is-hidden-mobile">      
                        <div class="tile is-ancestor" v-for="(rings,idnex) in chunkedItemsDesktop">
                            <div class="tile is-parent is-3" v-for="ring in rings">
                                <div class="tile is-child" v-if="ring">
                                    <article class="tile" @click="clickRow(ring)">
                                        <a>
                                        <figure class="image">
                                            <img :src="`/images/${ring.cover}`" v-if="ring.cover">
                                        <center>
                                            <p  class="subtitle" v-if="ring.description">$@{{ring.unit_price}}</p>
                                            <p >@{{ring.style | transJs(langs,locale)}} @{{ring.prong | transJs(langs,locale)}} @{{ring.shoulder | transJs(langs,locale)}} {{trans('engagementRing.setting')}}</p>
                                        </center>
                                        </figure>
                                        </a>
                                    </article>
                                </div>
                            </div>
                        </div>
                                <div class="level">
                                    <article class="level-item" >
                                        <button class="button is-primary" @click="more()">{{trans('engagementRing.More')}}</button>
                                    </article>
                                </div>
                    </div>
                    


                    <div class="is-hidden-desktop is-hidden-tablet is-centered box" >       
                        <div class="level is-mobile" v-for="(rings,idnex) in chunkedItemsMobile">
                            <div class="level-item" v-for="ring in rings">
                                <div v-if="ring">
                                            <a>
                                            <img @click="clickRow(ring)" width="128" height="96" :src="`/images/${ring.cover}`" v-if="ring.cover">
                                        <center>
                                            <p  class="subtitle" v-if="ring.description">$@{{ring.unit_price}}</p>
                                            <p v-if="ring.description">@{{ring.description}}</p>
                                        </center>
                                            </a>
                                </div>
                            </div>
                        </div>

                        <div class="level">
                            <article class="level-item" >
                                <button class="button is-primary" @click="more()">{{trans('engagementRing.More')}}</button>
                            </article>
                        </div>
                        
                     </div>


                    </div>

        </div>


    @include('layouts.frontFooter')

  
</body>



</html>
