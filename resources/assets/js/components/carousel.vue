<template>

        <div class="box">

          <!--   <nav class="pagination">
                <a class="button" @click="prevItem">Previous</a>
                <a class="button" @click="nextItem">Next</a>
                <ul>
                    <li v-for="(item, index) in carouselItems">
                        <a class="button" @click="showAtIndex(index)" :class="{ 'is-primary' : currentIndex == index }">{{ index+1 }}</a>
                    </li>
                </ul>
            </nav> -->

            <div class="">
                <figure class="image">
                    <img :src="currentItem.src" v-if="currentItem.type=='img'">
                    <iframe id="iframe1" :src="currentItem.src" :width="width" :height="height" v-if="currentItem.type=='video'"></iframe>
                    <figcaption class="has-text-centered">
                        <p class="title is-3">{{ currentItem.title }}</p>
                        <p class="subtitle is-5"> {{ currentItem.desc }} </p>
                        <span v-html="currentItem.other"></span>
                    </figcaption>
                </figure>
            </div>

           
                <div class="level is-mobile">
                    <div :class="{'box':currentIndex == index}" v-for="(img, index) in carouselItems" 
                    @click="currentIndex=index">
                        <div class="level-item has-text-centered" >
                            <a @click="onClick($event)">
                            <figure class="image is-96x96">
                                <img :src="img.thumb" ></img>
                            </figure>
                            </a>
                        </div>
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
                    <iframe id="iframe1" :src="currentItem.src" :width="width" :height="height" v-if="currentItem.type=='video'"></iframe>
                    <figcaption class="has-text-centered">
                        <p class="title is-3">{{ currentItem.title }}</p>
                        <p class="subtitle is-5"> {{ currentItem.desc }} </p>
                        <span v-html="currentItem.other"></span>
                    </figcaption>
                </figure>
            </div>

           
                <div class="level is-mobile">
                    <div :class="{'box':currentIndex == index}" v-for="(img, index) in carouselItems" 
                    @click="currentIndex=index">
                        <div class="level-item has-text-centered" >
                            <a @click="onClick($event)">
                            <figure class="image is-96x96">
                                <img :src="img.thumb" ></img>
                            </figure>
                            </a>
                        </div>
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
  var s = "path/to/file";
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
        
    },
    created () {
        this.currentIndex = 0;
    },
    data () {
        return {
            currentIndex : 0,
            // chunkedItemsDeskto: '',
            // chunkedItemsMobile: '',
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
        }
    },
    computed: {
        currentItem(){
            return this.carouselItems[this.currentIndex];
        },
        chunkedItemsMobile(){
                
                var chunk2 = []
                
                // filtered = this.carouselItems.filter(data=>data.wedding_rings.length>0)
                for (var i = 0; this.carouselItems.length - 1 >= i ; ) {
                    chunk2.push(this.carouselItems.slice(i,i+2))
                    i += 2
                }
                return chunk2
            },

        chunkedItemsDesktop(){
              
                var chunk1 = []
                
                // this.carouselItems = this.carouselItems.filter(data=>data.wedding_rings.length>0)
                for (var i = 0; this.carouselItems.length - 1 >= i ; ) {
                    chunk1.push(this.carouselItems.slice(i,i+4))
                    i += 4
                }
                return chunk1
            },

        
    }
}    
</script>