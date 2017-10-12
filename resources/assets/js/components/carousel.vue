<template>
    <div class="container">
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

            <div >
                <figure class="image">
                    <img :src="currentItem.src" v-if="currentItem.type=='img'">
                    <iframe id="iframe1" :src="currentItem.src" width="100%" height="500" v-if="currentItem.type=='video'"></iframe>
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
    name : 'vue-carousel',
    props: {
        carouselItems : {
            Type : Array,
            required : true
        }
    },
    created () {
        this.currentIndex = 0;
    },
    data () {
        return {
            currentIndex : 0,
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
        }
    }
}    
</script>
<style lang="scss">
.carousel {
    &__item {
        justify-content: center;
        align-items : center;
    }
}
html,body        {height:100%;}
.wrapper         {width:80%;height:100%;margin:0 auto;background:#CCC}
.h_iframe        {position:relative;}
.h_iframe .ratio {display:block;width:100%;height:auto;}
.h_iframe iframe {position:absolute;top:0;left:0;width:100%; height:100%;}
</style>