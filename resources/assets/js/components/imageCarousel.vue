<template>

    <div class="box" @click="$emit('active', null)">
    <div class="modal" :class="{'is-active': active} ">
                  <div class="modal-background" ></div>
                  <div class="modal-card">
                    <header class="modal-card-head">
                      <p class="modal-card-title">{{title}}</p>
                      <!-- <button class="delete" aria-label="close" @click="$emit('active', null)"></button> -->
                    </header>
                    <section class="modal-card-body" @click="$emit('active', null)">
                      <!-- Content ... -->

                      <div class="box">
                        <figure class="image">
                            <img :src="images+currentItem.src" v-if="currentItem.type=='img'" @click="nextItem">
                            <iframe id="iframe1" :src="youtube+currentItem.src+rel" :width="width" :height="height" v-if="currentItem.type=='video'"></iframe>
                            <figcaption class="has-text-centered">
                                <p class="title is-3">{{ currentItem.title }}</p>
                                <p class="subtitle is-5"> {{ currentItem.desc }} </p>
                                <span v-html="currentItem.other"></span>
                            </figcaption>
                        </figure>
                    </div>

            
            <div class="is-hidden-mobile">
                <center v-if="chunkedItemsDesktop.length">
                    <a></a>
                </center>

                <div class="level is-mobile" >
                    <div class="level-item">
                    <div v-for="(img, index) in chunkedItemsDesktop" 
                    @click="currentSelectedItem(index,'lower')" v-if="chunkedItemsDesktop">
                        <div class="level-item has-text-centered" >
                            <a v-if="img.thumb">
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
                <center v-if="chunkedItemsMobile.length">
                    <a></a>
                </center>
                    <div class="level is-mobile" >
                        <div class="level-item">
                        <div v-for="(img, index) in chunkedItemsMobile" 
                        @click="currentSelectedItem(index,'lower')" v-if="chunkedItemsMobile">
                            <div class="level-item has-text-centered" >
                                <a v-if="img.thumb">
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
    name : 'imageCarousel',
    props: {
        items : {
            Type : Array,
        },
        active:'', 
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
            return this.carouselItemsToArray[this.currentIndex];
        },
       

        carouselItemsToArray(){

            this.currentIndex = 0
               var arr = []
            if (!this.items) {
                return arr.push({src:'', type:'', thumb:''})
            }
 
            for (var i = this.items.length - 1; i >= 0; i--) {
                if (this.items[i].image) {
                
                    arr.push({src:this.items[i].image, type:"img", thumb:this.items[i].image})
                }
                
            }
                
                
                return arr;
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