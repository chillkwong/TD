<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Search Wedding Ring</title>

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
                    <center><h1 class="title is-5">Wedding Rings</h1>
                        <h1 >
                        Thank you for customers support, so that we could share their precious moments.
                        </h1>
                    
                    </center>
                </div>
                
            </div>
        </div>
        </div>
        
        <div id="weddingRings">
            <div class="box">
                <div class="level">

                </div>

                    <!-- <div class="tile is-ancestor" >
                        <div class="tile is-parent ">
                            <div class="tile is-child notification is-primary" >
                                <center><h1 class="title is-5">Wedding Rings</h1>
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
                                    <div>Style </div>
                                    <input v-for="(value, index) in query.search_conditions.style" class="button " :class=" {'is-info active' : query.search_conditions.style[index].clicked} " type="button" @click="toggleValue(query.search_conditions.style[index].clicked,'style', index)" :value="query.search_conditions.style[index].display | transJs(langs,locale)"> 
                                </article>

                                <article class="tile is-child box is-4" >
                                    <div>Metal</div>
                                    <input v-for="(value, index) in query.search_conditions.metal " class=" button " :class=" {'is-info active' : query.search_conditions.metal[index].clicked} " type="button" @click="toggleValue(query.search_conditions.metal[index].clicked,'metal', index)" :value="query.search_conditions.metal[index].display | transJs(langs,locale)"> 
                                </article>

                                <article class="tile is-child box is-2" >
                                    <div>Side stone</div>
                                    <input v-for="(value, index) in query.search_conditions.sideStone " class=" button " :class=" {'is-info active' : query.search_conditions.sideStone[index].clicked} " type="button" @click="toggleValue(query.search_conditions.sideStone[index].clicked,'sideStone', index)" :value="query.search_conditions.sideStone[index].display | transJs(langs,locale)"> 
                                </article>

                                <article class="tile is-child box is-2" >
                                    <div>Custom-make</div>
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
            <button class="button is-info ">wedding Rings</button>
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
                                    <div>Style</div>
                                    <input v-for="(value, index) in query.search_conditions.style" class="button " :class=" {'is-info active' : query.search_conditions.style[index].clicked} " type="button" @click="toggleValue(query.search_conditions.style[index].clicked,'style', index)" :value="query.search_conditions.style[index].display"> 
                                </article>

                                <article class="tile is-child box" >
                                    <div>Metal</div>
                                    <input v-for="(value, index) in query.search_conditions.metal " class=" button " :class=" {'is-info active' : query.search_conditions.metal[index].clicked} " type="button" @click="toggleValue(query.search_conditions.metal[index].clicked,'metal', index)" :value="query.search_conditions.metal[index].display"> 
                                </article>

                                <article class="tile is-child box" >
                                    <div>Side stone</div>
                                    <input v-for="(value, index) in query.search_conditions.sideStone " class=" button " :class=" {'is-info active' : query.search_conditions.sideStone[index].clicked} " type="button" @click="toggleValue(query.search_conditions.sideStone[index].clicked,'sideStone', index)" :value="query.search_conditions.sideStone[index].display"> 
                                </article>

                                <article class="tile is-child box" >
                                    <div>Custom-make</div>
                                    <input v-for="(value, index) in query.search_conditions.customized " class=" button " :class=" {'is-info active' : query.search_conditions.customized[index].clicked} " type="button" @click="toggleValue(query.search_conditions.customized[index].clicked,'customized', index)" :value="query.search_conditions.customized[index].display"> 
                                </article>

                            </div>
                        </div>
                    </div>


                </section>
                <footer class="modal-card-foot">
                  <button class="button is-success">Submit</button>
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
                                <div class="tile is-child" v-if="ring.wedding_rings[0]">
                                    <article class="tile">
                                        <a @click= "clickRow(ring)">
                                            <img :src="`/images/${ring.wedding_rings[0].cover}`" v-if="ring.wedding_rings[0].cover">
                                        <center>
                                            <div class="level">
                                                <div class="level-item is-left">
                                                    <p  class="subtitle" v-if="ring.wedding_rings[0].unit_price">$@{{ring.wedding_rings[0].unit_price}}</p>
                                                </div>
                                                <div class="level-item is-right" v-if="ring.wedding_rings[1]">
                                                    <p  class="subtitle" v-if="ring.wedding_rings[1].unit_price">$@{{ring.wedding_rings[1].unit_price}}</p>
                                                </div>
                                            </div>

                                            <div class="level">
                                                <div class="level-item is-left">
                                                    <p  v-if="ring.wedding_rings[0].description">@{{ring.wedding_rings[0].description}}</p>
                                                </div>
                                                <!-- <div class="level-item is-right" v-if="ring.wedding_rings[1]">
                                                    <p  v-if="ring.wedding_rings[1].description">$@{{ring.wedding_rings[1].description}}</p>
                                                </div> -->
                                            </div>

                                        </center>
                                        </a>
                                        
                                    </article>
                                </div>
                            </div>
                        </div>

                        <div class="level">
                            <article class="level-item" >
                                <button class="button is-primary" @click="more()">More</button>
                            </article>
                        </div>
                    </div>



                    <div class="is-hidden-desktop is-hidden-tablet is-centered box" >       
                        <div class="level is-mobile" v-for="(rings,idnex) in chunkedItemsMobile">
                            <div class="level-item" v-for="ring in rings">
                                <div v-if="ring.wedding_rings[0]">
                                        <a @click= "clickRow(ring)">
                                            <img width="128" height="96" :src="`/images/${ring.wedding_rings[0].cover}`" v-if="ring.wedding_rings[0].cover">
                                        <center>
                                            <div class="level">
                                                <div class="level-item is-left">
                                                    <p  class="subtitle" v-if="ring.wedding_rings[0].unit_price">$@{{ring.wedding_rings[0].unit_price}}</p>
                                                </div>
                                                <div class="level-item is-right" v-if="ring.wedding_rings[1]">
                                                    <p  class="subtitle" v-if="ring.wedding_rings[1].unit_price">$@{{ring.wedding_rings[1].unit_price}}</p>
                                                </div>
                                            </div>

                                            <div class="level">
                                                <div class="level-item is-left">
                                                    <p  v-if="ring.wedding_rings[0].description">$@{{ring.wedding_rings[0].description}}</p>
                                                </div>
                                                <div class="level-item is-right" v-if="ring.wedding_rings[1]">
                                                    <p  v-if="ring.wedding_rings[1].description">$@{{ring.wedding_rings[1].description}}</p>
                                                </div>
                                            </div>
                                        </center>
                                        </a>
                                </div>
                            </div>
                        </div>

                        <div class="level">
                            <article class="level-item" >
                                <button class="button is-primary" @click="more()">More</button>
                            </article>
                        </div>
                    </div>



                </div>
        	
        </div>


    @include('layouts.frontFooter')

  
     
</body>



</html>
