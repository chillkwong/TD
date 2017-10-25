<template>

        <div class="box">

           <!--  <nav class="pagination">
                <a class="button" @click="prevItem">Previous</a>
                <a class="button" @click="nextItem">Next</a>

                <ul>
                    <li v-for="(item, index) in carouselItems">
                        <a class="button" @click="showAtIndex(index)" :class="{ 'is-primary' : currentIndex == index }">{{ index+1 }}</a>
                    </li>
                </ul>
            </nav> -->

                <div class="level is-mobile" @click="$emit('active', null)">
                           <div class="level-item">
                                <div :class="{'box':currentIndex == index}" v-for="(img, index) in carouselUpperItemsToArray" 
                                @click="currentSelectedItem(index,'upper')" v-if="img.thumb">
                                    <div class="level-item has-text-centered" >
                                        <a @click="onClick($event)">
                                        <figure class="image is-96x96">
                                            <img :src="images+img.thumb" ></img>
                                        </figure>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                <div class="" @click="$emit('active', null)">
                    <figure class="image">
                        <img :src="images+currentItem.src" v-if="currentItem.type=='img'">
                        <iframe id="iframe1" :src="youtube+currentItem.src" :width="width" :height="height" v-if="currentItem.type=='video'"></iframe>
                        <figcaption class="has-text-centered">
                            <p class="title is-3">{{ currentItem.title }}</p>
                            <p class="subtitle is-5"> {{ currentItem.desc }} </p>
                            <span v-html="currentItem.other"></span>
                        </figcaption>

                    </figure>
                </div>

               
                    <div class="is-hidden-mobile">
                        <div class="level is-mobile" >
                           <div class="level-item">
                                <div :class="{'box':currentIndex == index}" v-for="(img, index) in chunkedItemsDesktop" 
                                @click="currentSelectedItem(index,'lower')" v-if="img.thumb">
                                    <div class="level-item has-text-centered" >
                                        <a @click="onClick($event)">
                                        <figure class="image is-96x96">
                                            <img :src="images+img.thumb"></img>
                                        </figure>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="level-item">
                        <a v-for="(item, index) in carouselItems">
                            <a class="button" @click="showAtIndex(index)" :class="{ 'is-primary' : currentIndex == index }">{{ index+1 }}</a>
                        </a>
                        </div>
                    </div>

                 <div class="level is-hidden-desktop is-hidden-tablet is-centered">
                    <div class="level is-mobile" >
                        <div :class="{'box':currentIndex == index}" v-for="(img, index) in chunkedItemsMobile" 
                        @click="currentSelectedItem(index,'lower')" v-if="img.thumb">
                            <div class="level-item has-text-centered" >
                                <a @click="onClick($event)">
                                <figure class="image is-96x96">
                                    <img :src="images+img.thumb"></img>
                                </figure>
                                </a>
                            </div>
                        </div>
                    </div> 
                    <div class="level-item">
                    <a v-for="(item, index) in carouselItems">
                        <a class="button" @click="showAtIndex(index)" :class="{ 'is-primary' : currentIndex == index }">{{ index+1 }}</a>
                    </a>
                    </div>
                </div>




                 <div class="modal" :class="{'is-active': carouselActive} ">
                  <div class="modal-background"></div>
                  <div class="modal-card">
                    <header class="modal-card-head">
                      <p class="modal-card-title">Modal title</p>
                      <button class="delete" aria-label="close"></button>
                    </header>
                    <section class="modal-card-body" @click="$emit('active', null)">
                      <!-- Content ... -->

                      <div class="">
                <figure class="image">
                    <img :src="currentItem.src" v-if="currentItem.type=='img'">
                    <iframe id="iframe1" :src="youtube+currentItem.src" :width="width" :height="height" v-if="currentItem.type=='video'"></iframe>
                    <figcaption class="has-text-centered">
                        <p class="title is-3">{{ currentItem.title }}</p>
                        <p class="subtitle is-5"> {{ currentItem.desc }} </p>
                        <span v-html="currentItem.other"></span>
                    </figcaption>
                </figure>
            </div>

            
            <div class="is-hidden-mobile">
                <div class="level is-mobile" >
                    <div :class="{'box':currentIndex == index}" v-for="(img, index) in chunkedItemsDesktop" 
                    @click="currentSelectedItem(index,'lower')" v-if="img.thumb">
                        <div class="level-item has-text-centered" >
                            <a @click="onClick($event)">
                            <figure class="image is-96x96">
                                <img :src="images+img.thumb" ></img>
                            </figure>
                            </a>
                        </div>
                    </div>
                </div> 
                <div class="level-item">
                    <a v-for="(item, index) in carouselItems">
                        <a class="button" @click="showAtIndex(index)" :class="{ 'is-primary' : currentIndex == index }">{{ index+1 }}</a>
                    </a>
                    </div>
            </div>

            <div class="level is-hidden-desktop is-hidden-tablet is-centered">
                    <div class="level is-mobile" >
                        
                        <div :class="{'box':currentIndex == index}" v-for="(img, index) in chunkedItemsMobile" 
                        @click="currentSelectedItem(index,'lower')" v-if="img.thumb">
                            <div class="level-item has-text-centered" >
                                <a @click="onClick($event)">
                                <figure class="image is-96x96">
                                    <img :src="images+img.thumb"></img>
                                </figure>
                                </a>
                            </div>
                        </div>
                    
                    </div> 

                    <div class="level-item">
                    <a v-for="(item, index) in carouselItems">
                        <a class="button" @click="showAtIndex(index)" :class="{ 'is-primary' : currentIndex == index }">{{ index+1 }}</a>
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

function setIframeSrc() {
  var s = "/images";
  var iframe1 = document.getElementById('iframe1');
  if ( -1 == navigator.userAgent.indexOf("MSIE") ) {
    iframe1.src = s;
  }
  else {
    iframe1.location = s;
  }
}
setTimeout(setIframeSrc, 5);

export default {
    name : 'carousel',
    props: {
        carouselItems : {
            Type : Array,
            required : true
        },
        width: '',
        height:'',
        items:'',
        carouselActive:'',
        carouselUpperItems:'',

        
        
    },
    created () {
        this.currentIndex = 0;
    },
    data () {
        return {
            currentIndex : 0,
            showUpper: true,
            youtube:'http://www.youtube.com/embed/',
            images: '/images/',
        }
    },
    methods : {
        
        onClick:function(event)
        {
            if(event.target.className == 'disabled')
            {
                return;
            }
            event.target.className = 'disabled';
        },
        nextItem () {
            if(this.currentIndex == this.carouselItems.length-1){
                this.currentIndex = 0;
            }else{
                this.currentIndex++;  
            }
        },
        prevItem () {
            if(this.currentIndex == 0){
                this.currentIndex = this.carouselItems.length-1;
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

                    if (this.carouselUpperItems.cover) {
                        arr.push({src:this.carouselUpperItems.cover, type:"img", thumb:this.carouselUpperItems.cover})
                    }
                    if (this.carouselUpperItems.image1) {
                        arr.push({src:this.carouselUpperItems.image1, type:"img", thumb:this.carouselUpperItems.image1})
                    }
                    if (this.carouselUpperItems.image2) {
                        arr.push({src:this.carouselUpperItems.image2, type:"img", thumb:this.carouselUpperItems.image2})
                    }
                    if (this.carouselUpperItems.video) {
                        arr.push({src:this.carouselUpperItems.video, type:"video", thumb:this.carouselUpperItems.cover})
                    }
                    
                    return arr;
                },

        carouselItemsToArray(){
                    var arr = []

                    
                for (var i = this.carouselItems.length - 1; i >= 0; i--) {
                    if (this.carouselItems[i].cover&&this.carouselItems[i].video) {
                        arr.push({src:this.carouselItems[i].video, type:"video", thumb:this.carouselItems[i].cover})
                    }else
                    {
                        arr.push({src:this.carouselItems[i].cover, type:"img", thumb:this.carouselItems[i].cover})
                    }
                    
                }
                    
                    
                    return arr;
                },

        chunkedItemsDesktop(){
              
                var chunk1 = []
                var chunk2 = []
                var chunk3 = []

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