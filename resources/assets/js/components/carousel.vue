<template>

        <div class="box">

           <!--  <nav class="pagination">
                <a class="button" @click="prevItem">Previous</a>
                <a class="button" @click="nextItem">Next</a>

                <ul>
                    <li v-for="(item, index) in items">
                        <a class="button" @click="showAtIndex(index)" :class="{ 'is-primary' : currentIndex == index }">{{ index+1 }}</a>
                    </li>
                </ul>
            </nav> -->

                <div class="level-item" @click="$emit('active', null)">
                    <a v-for="(item, index) in chunkedUpperItems">
                        <a class="button" @click="currentSelectedItem(index,'upper')" :class="{ 'is-primary' : currentIndex == index }">{{ index+1 }}</a>
                    </a>
                    </div>

                <div class="level is-mobile" @click="$emit('active', null)">
                           <div class="level-item">
                                <div :class="{'box':currentIndex == index}" v-for="(img, index) in chunkedUpperItems" 
                                @click="currentSelectedItem(index,'upper')" v-if="img.thumb">
                                    <div class="level-item has-text-centered" >
                                        <!-- <a @click="onClick($event)"> -->
                                            <a>
                                        <figure class="image is-96x96">
                                            <img :src="images+img.thumb" ></img>
                                            <i class="fa fa-play" aria-hidden="true" v-if="img.type=='video'"></i>
                                        </figure>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>



                <div class="" @click="$emit('active', null)">
                    <figure class="image">
                        <img :src="images+currentItem.src" v-if="currentItem.type=='img'">
                        <iframe id="iframe1" :src="youtube+currentItem.src+rel" :width="width" :height="height" v-if="currentItem.type=='video'"></iframe>
                        <figcaption class="has-text-centered">
                            <p class="title is-3">{{ currentItem.title }}</p>
                            <p class="subtitle is-5"> {{ currentItem.desc }} </p>
                            <span v-html="currentItem.other"></span>
                        </figcaption>

                    </figure>
                </div>



                    <div class="is-hidden-mobile">
                        <center>
                            <p>Customer Jewellires</p>
                        </center>
                        <div class="level is-mobile" >
                           <div class="level-item">
                                <div :class="{'box':currentIndex == index}" v-for="(img, index) in chunkedItemsDesktop" 
                                @click="currentSelectedItem(index,'lower')" v-if="chunkedItemsDesktop">
                                    <div class="level-item has-text-centered" >
                                        <a>
                                        <figure class="image is-96x96">
                                            <img :src="images+img.thumb"></img>
                                            <i class="fa fa-play" aria-hidden="true" v-if="img.type=='video'"></i>
                                        </figure>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="level-item">
                            <a v-for="(item, index) in items">
                                <a class="button" @click="currentSelectedItem(index,'lower')" :class="{ 'is-primary' : currentIndex == index }">{{ index+1 }}</a>
                            </a>
                        </div>
                    </div>

                 <div class="level is-hidden-desktop is-hidden-tablet is-centered">
                    <center>
                        <p>Customer Jewellires</p>
                    </center>
                    <div class="level is-mobile" >
                        <div class="level-item">
                            <div :class="{'box':currentIndex == index}" v-for="(img, index) in chunkedItemsMobile" 
                            @click="currentSelectedItem(index,'lower')" v-if="chunkedItemsMobile">
                                <div class="level-item has-text-centered" >
                                    <a>
                                    <figure class="image is-96x96">
                                        <img :src="images+img.thumb"></img>
                                        <i class="fa fa-play" aria-hidden="true" v-if="img.type=='video'"></i>
                                    </figure>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div> 

                    <div class="level-item">
                    <a v-for="(item, index) in items">
                        <a class="button" @click="currentSelectedItem(index,'lower')" :class="{ 'is-primary' : currentIndex == index }">{{ index+1 }}</a>
                    </a>
                    </div>
                </div>




                 <div class="modal" :class="{'is-active': active} ">
                  <div class="modal-background"></div>
                  <div class="modal-card">
                    <header class="modal-card-head">
                      <p class="modal-card-title">{{title}}</p>
                      <button class="delete" aria-label="close"></button>
                    </header>
                    <section class="modal-card-body" @click="$emit('active', null)">
                      <!-- Content ... -->

                      <div class="">
                <figure class="image">
                    <img :src="currentItem.src" v-if="currentItem.type=='img'">
                    <iframe id="iframe1" :src="youtube+currentItem.src+rel" :width="width" :height="height" v-if="currentItem.type=='video'"></iframe>
                    <figcaption class="has-text-centered">
                        <p class="title is-3">{{ currentItem.title }}</p>
                        <p class="subtitle is-5"> {{ currentItem.desc }} </p>
                        <span v-html="currentItem.other"></span>
                    </figcaption>
                </figure>
            </div>

            
            <div class="is-hidden-mobile">
                <center>
                    <p>Customer Jewellires</p>
                </center>
                <div class="level is-mobile" >
                    <div class="level-item">
                    <div :class="{'box':currentIndex == index}" v-for="(img, index) in chunkedItemsDesktop" 
                    @click="currentSelectedItem(index,'lower')" v-if="chunkedItemsDesktop">
                        <div class="level-item has-text-centered" >
                            <a>
                            <figure class="image is-96x96">
                                <img :src="images+img.thumb" ></img>
                                <i class="fa fa-play" aria-hidden="true" v-if="img.type=='video'"></i>
                            </figure>
                            </a>
                        </div>
                    </div>
                </div> 
            </div>
                <div class="level-item">
                        <a v-for="(item, index) in items">
                            <a class="button" @click="currentSelectedItem(index,'lower')" :class="{ 'is-primary' : currentIndex == index }">{{ index+1 }}</a>
                        </a>
                    </div>
            </div>

            <div class="level is-hidden-desktop is-hidden-tablet is-centered">
                <center>
                    <p>Customer Jewellires</p>
                </center>
                    <div class="level is-mobile" >
                        <div class="level-item">
                        <div :class="{'box':currentIndex == index}" v-for="(img, index) in chunkedItemsMobile" 
                        @click="currentSelectedItem(index,'lower')" v-if="chunkedItemsMobile">
                            <div class="level-item has-text-centered" >
                                <a>
                                <figure class="image is-96x96">
                                    <img :src="images+img.thumb"></img>
                                    <i class="fa fa-play" aria-hidden="true" v-if="img.type=='video'"></i>
                                </figure>
                                </a>
                            </div>
                        </div>
                        </div>
                    </div> 

                    <div class="level-item">
                        <a v-for="(item, index) in items">
                            <a class="button" @click="currentSelectedItem(index,'lower')" :class="{ 'is-primary' : currentIndex == index }">{{ index+1 }}</a>
                        </a>
                    </div>
                </div>


                    </section>
                    <!-- <footer class="modal-card-foot">
                      <button class="button is-success">Save changes</button>
                      <button class="button">Cancel</button>
                    </footer> -->
                  </div>
                </div>
               
        </div>
</template>

<script>

// function setIframeSrc() {
//   var s = "/images";
//   var iframe1 = document.getElementById('iframe1');
//   if ( -1 == navigator.userAgent.indexOf("MSIE") ) {
//     iframe1.src = s;
//   }
//   else {
//     iframe1.location = s;
//   }
// }
// setTimeout(setIframeSrc, 5);

export default {
    name : 'carousel',
    props: {
        items : {
            Type : Array,
        },
        width: '',
        height:'',
        active:'',
        upperitems:'',
        title:'',

        
        
    },
    created () {
        this.currentIndex = 0;
    },
    data () {
        return {
            currentIndex : 0,
            showUpper: true,
            youtube:'http://www.youtube.com/embed/',
            rel: '?rel=0',
            images: '/images/',
        }
    },
    methods : {
        
        // onClick:function(event)
        // {
        //     if(event.target.className == 'disabled')
        //     {
        //         return;
        //     }
        //     event.target.className = 'disabled';
        // },
        nextItem () {
            if(this.currentIndex == this.items.length-1){
                this.currentIndex = 0;
            }else{
                this.currentIndex++;  
            }
        },
        prevItem () {
            if(this.currentIndex == 0){
                this.currentIndex = this.items.length-1;
            }else{
                this.currentIndex--;  
            }
        },
        showAtIndex(index){
            this.currentIndex = index;
        },
        currentSelectedItem(index,upper){
            if (upper == 'upper') {
                this.currentIndex = index
                return this.showUpper = true
            }
            this.showUpper = false
            this.currentIndex = index
            
        },
    },
    computed: {
        currentItem(){
            if (this.showUpper) {
            return this.carouselUpperItemsToArray[this.currentIndex];                
            }
            return this.carouselItemsToArray[this.currentIndex];
        },
        carouselUpperItemsToArray(){
                    var arr = []

                if (this.upperitems.length>0) {
                    for (var i = 0; this.upperitems.length - 1 >= i; i++) {
                        
                        if (this.upperitems[i].cover) {
                            arr.push({src:this.upperitems[i].cover, type:"img", thumb:this.upperitems[i].cover})
                        }
                        if (this.upperitems[i].image1) {
                            arr.push({src:this.upperitems[i].image1, type:"img", thumb:this.upperitems[i].image1})
                        }
                        if (this.upperitems[i].image2) {
                            arr.push({src:this.upperitems[i].image2, type:"img", thumb:this.upperitems[i].image2})
                        }
                        if (this.upperitems[i].video) {
                            arr.push({src:this.upperitems[i].video, type:"video", thumb:this.upperitems[i].cover})
                        }

                    }


                      return arr;
                }

                if (this.upperitems.cover) {
                    arr.push({src:this.upperitems.cover, type:"img", thumb:this.upperitems.cover})
                }
                if (this.upperitems.image1) {
                    arr.push({src:this.upperitems.image1, type:"img", thumb:this.upperitems.image1})
                }
                if (this.upperitems.image2) {
                    arr.push({src:this.upperitems.image2, type:"img", thumb:this.upperitems.image2})
                }
                if (this.upperitems.video) {
                    arr.push({src:this.upperitems.video, type:"video", thumb:this.upperitems.cover})
                }
                
                return arr;
            },

        carouselItemsToArray(){

               var arr = []
            if (!this.items) {
                return arr.push({src:'', type:'', thumb:''})
            }
 
            for (var i = this.items.length - 1; i >= 0; i--) {
                if (this.items[i].cover&&this.items[i].video) {
                    arr.push({src:this.items[i].video, type:"video", thumb:this.items[i].cover})
                }else
                {
                    arr.push({src:this.items[i].cover, type:"img", thumb:this.items[i].cover})
                }
                
            }
                
                
                return arr;
            },

        chunkedUpperItems(){
                
                var chunk1 = []
                var chunk2 = []
                var chunk3 = []
                
                if (!this.carouselUpperItemsToArray) {
                return chunk1
            }
                if (this.currentIndex<=1) {
                 chunk1 = this.carouselUpperItemsToArray.slice(0,3)
                 chunk2 = this.carouselUpperItemsToArray.slice(3,this.carouselUpperItemsToArray.length).fill('')
                 return chunk1.concat(chunk2)
                }

                chunk1 = this.carouselUpperItemsToArray.slice(0,this.currentIndex-1).fill('')
                chunk2 = this.carouselUpperItemsToArray.slice(this.currentIndex-1,this.currentIndex+2)
                chunk3 = this.carouselUpperItemsToArray.slice(this.currentIndex+2,this.carouselUpperItemsToArray.length).fill('')
                
                return chunk1.concat(chunk2,chunk3)
            },

        chunkedItemsDesktop(){
              
                var chunk1 = []
                var chunk2 = []
                var chunk3 = []
                if (!this.items) {
                return chunk1
            }
                if (this.currentIndex<=2) {
                 chunk1 = this.carouselItemsToArray.slice(0,4)
                 chunk2 = this.carouselItemsToArray.slice(4,this.carouselItemsToArray.length).fill('')
                 return chunk1.concat(chunk2)
                }

                chunk1 = this.carouselItemsToArray.slice(0,this.currentIndex-2).fill('')
                chunk2 = this.carouselItemsToArray.slice(this.currentIndex-2,this.currentIndex+2)
                chunk3 = this.carouselItemsToArray.slice(this.currentIndex+2,this.carouselItemsToArray.length).fill('')
                
                return chunk1.concat(chunk2,chunk3)
            },



        chunkedItemsMobile(){
                
                var chunk1 = []
                var chunk2 = []
                var chunk3 = []
                
                if (!this.items) {
                return chunk1
            }
                if (this.currentIndex<=1) {
                 chunk1 = this.carouselItemsToArray.slice(0,3)
                 chunk2 = this.carouselItemsToArray.slice(3,this.carouselItemsToArray.length).fill('')
                 return chunk1.concat(chunk2)
                }

                chunk1 = this.carouselItemsToArray.slice(0,this.currentIndex-1).fill('')
                chunk2 = this.carouselItemsToArray.slice(this.currentIndex-1,this.currentIndex+2)
                chunk3 = this.carouselItemsToArray.slice(this.currentIndex+2,this.carouselItemsToArray.length).fill('')
                
                return chunk1.concat(chunk2,chunk3)
            },


        
    }
}    
</script>