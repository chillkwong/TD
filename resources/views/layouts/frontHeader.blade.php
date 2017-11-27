<div id="header">
<section class="hero is-primary is-bold">
  <!-- Hero header: will stick at the top -->
   <nav  class="navbar is-transparent">
  <div class="navbar-brand">
    <a class="navbar-item" href="{{url(app()->getLocale())}}">
      <img src="/front_end/company/logo_PNG_sq_60x60_1.png" alt="Bulma: a modern CSS framework based on Flexbox" width="35" height="70">
    </a>
    
      <a class="navbar-item is-hidden-desktop" :href="'/en' + partialUrl" >
      <img src="/front_end/langs/en.png" width="20" height="10"></a>
      <a class="navbar-item is-hidden-desktop" :href="'/hk' + partialUrl" >
      <img src="/front_end/langs/hk.png" width="20" height="10"></a>
      <a class="navbar-item is-hidden-desktop" :href="'/cn' + partialUrl" >
      <img src="/front_end/langs/china.png" width="20" height="10"></a>
      <i class="fa fa-play" aria-hidden="true" ></i>
   

    <div class="button navbar-burger burger" data-target="navMenuTransparentExample">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>

  <div id="navMenuTransparentExample" class="navbar-menu">
    <div class="navbar-start">
      
      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link  is-active" href="{{url(app()->getLocale())}}/gia-loose-diamonds">
          {{trans('frontHeader.Diamonds')}}
        </a>
        <div class="navbar-dropdown is-boxed">
          <a class="navbar-item " href="{{url(app()->getLocale())}}/gia-loose-diamonds">
            <small class="has-text-info">Loose Diamonds</small>
          </a>
              <div class="navbar-item">
                <div class="navbar-content">
                  <div class="level is-mobile">
                    <div class="level-left">
                      <div class="level-item">
                        <a href="{{url(app()->getLocale())}}/gia-loose-diamonds/round-cut"><img src="/front_end/diamond_shapes/RD.png" width="15"> Round</a>
                      </div>
                    </div>
                    <div class="level-right">
                      <div class="level-item">
                      
                      </div>
                    </div>
                  </div>
                </div>
              </div>


          <hr class="navbar-divider">

          <a class="navbar-item " href="{{url(app()->getLocale())}}/gia-loose-diamonds/fancy-cut-diamond">
            <small class="has-text-info">Fancy Cut Diamonds</small>
          </a>
              <div class="navbar-item">
                <div class="navbar-content">
                  <div class="level is-mobile">
                    <div class="level-left">
                      <div class="level-item">
                        <a href="{{url(app()->getLocale())}}/gia-loose-diamonds/fancy-cut-diamond/heart-shaped"><img src="/front_end/diamond_shapes/HT.png" width="15"> Heart
                        </a>
                      </div>
                      
                    </div>
                    <div class="level-right">
                      <div class="level-item">
                        <a href="{{url(app()->getLocale())}}/gia-loose-diamonds/fancy-cut-diamond/princess-cut"><img src="/front_end/diamond_shapes/PR.png" width="15"> Princess
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="navbar-item">
                <div class="navbar-content">
                  <div class="level is-mobile">
                    <div class="level-left">
                      <div class="level-item">
                        <a href="{{url(app()->getLocale())}}/gia-loose-diamonds/fancy-cut-diamond/emerald-cut"><img src="/front_end/diamond_shapes/EM.png" width="15"> Emerald
                        </a>
                      </div>
                      
                    </div>
                    <div class="level-right">
                      <div class="level-item">
                        <a href="{{url(app()->getLocale())}}/gia-loose-diamonds/fancy-cut-diamond/asscher-cut"><img src="/front_end/diamond_shapes/AC.png" width="15"> Asscher
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="navbar-item">
                <div class="navbar-content">
                  <div class="level is-mobile">
                    <div class="level-left">
                      <div class="level-item">
                        <a href="{{url(app()->getLocale())}}/gia-loose-diamonds/fancy-cut-diamond/oval-cut"><img src="/front_end/diamond_shapes/OV.png" width="15"> Oval
                        </a>
                      </div>
                      
                    </div>
                    <div class="level-right">
                      <div class="level-item">
                        <a href="{{url(app()->getLocale())}}/gia-loose-diamonds/fancy-cut-diamond/cushion-cut"><img src="/front_end/diamond_shapes/CU.png" width="15"> Cushion
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="navbar-item">
                <div class="navbar-content">
                  <div class="level is-mobile">
                    <div class="level-left">
                      <div class="level-item">
                        <a href="{{url(app()->getLocale())}}/gia-loose-diamonds/fancy-cut-diamond/marquise-cut"><img src="/front_end/diamond_shapes/MQ.png" width="15"> Marquise
                        </a>
                      </div>
                      
                    </div>
                    <div class="level-right">
                      <div class="level-item">
                        <a href="{{url(app()->getLocale())}}/gia-loose-diamonds/fancy-cut-diamond/Radiant-cut"><img src="/front_end/diamond_shapes/RA.png" width="15"> Radiant
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="navbar-item">
                <div class="navbar-content">
                  <div class="level is-mobile">
                    <div class="level-left">
                      <div class="level-item">
                        <a href="{{url(app()->getLocale())}}/gia-loose-diamonds/fancy-cut-diamond/pear-cut"><img src="/front_end/diamond_shapes/PS.png" width="15"> Pear
                        </a>
                      </div>
                      
                    </div>
                    
                  </div>
                </div>
              </div>

              <hr class="navbar-divider">

              <a class="navbar-item " href="{{url(app()->getLocale())}}/gia-loose-diamonds/fancy-color">
                <small class="has-text-info">Fancy Color Diamonds</small>
              </a>
                  
        </div>
      </div>


      
      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link  is-active" href="{{url(app()->getLocale())}}/engagement-rings">
          {{trans('frontHeader.Engagement Rings')}}
        </a>
        <div class="navbar-dropdown is-boxed">
          <a class="navbar-item " href="{{url(app()->getLocale())}}/engagement-rings/solitaire-ring-setting">
           <div class="navbar-content">
                <p>
                  <small class="has-text-info">{{trans('frontHeader.Engagement Rings')}}</small>
                </p>
                <p><img src="/front_end/engagementRing/Solitaire.png" width="30">{{trans('frontHeader.Solitaire Ring')}}</p>
              </div>
          </a>

          <hr class="navbar-divider">

          <a class="navbar-item " href="{{url(app()->getLocale())}}/engagement-rings/side-stones-setting">
           <div class="navbar-content">
                <p><img src="/front_end/engagementRing/Side-stone.png" width="30">{{trans('frontHeader.Side-stone Ring')}}</p>
              </div>
          </a>

          <hr class="navbar-divider">

          <a class="navbar-item " href="{{url(app()->getLocale())}}/engagement-rings/halo-setting">
           <div class="navbar-content">
                <p><img src="/front_end/engagementRing/Halo.png" width="30">{{trans('frontHeader.Halo Ring')}}</p>
              </div>
          </a>
                  
        </div>
      </div>


      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link  is-active" href="{{url(app()->getLocale())}}/wedding-rings">
          {{trans('frontHeader.Wedding Rings')}}
        </a>
        <div class="navbar-dropdown is-boxed">
          <a class="navbar-item " href="{{url(app()->getLocale())}}/wedding-rings/classic">
           <div class="navbar-content">
                <p>
                  <small class="has-text-info">{{trans('frontHeader.Wedding Rings')}}</small>
                </p>
                <p>{{trans('frontHeader.Classic Ring')}}</p>
              </div>
          </a>

          <hr class="navbar-divider">

          <a class="navbar-item " href="{{url(app()->getLocale())}}/wedding-rings/japanese">
           <div class="navbar-content">
                <p>{{trans('frontHeader.Japanese Ring')}}</p>
              </div>
          </a>

          <hr class="navbar-divider">

          <a class="navbar-item " href="{{url(app()->getLocale())}}/wedding-rings/vintage">
           <div class="navbar-content">
                <p><p>{{trans('frontHeader.Vintage Ring')}}</p></p>
              </div>
          </a>
                  
        </div>
      </div>
      

      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link  is-active" href="{{url(app()->getLocale())}}/education-diamond-grading">
          {{trans('frontHeader.Education')}}
        </a>
        <div class="navbar-dropdown is-boxed">

          <a class="navbar-item " href="{{url(app()->getLocale())}}/education-diamond-grading/gia-report/4cs">
            <small class="has-text-info">{{trans('frontHeader.Diamond Grading')}}</small>
          </a>
              <div class="navbar-item">
                <div class="navbar-content">
                  <div class="level is-mobile">
                    <div class="level-left">
                      <div class="level-item">
                        <a href="{{url(app()->getLocale())}}/education-diamond-grading/gia-report/4cs/carat">{{trans('frontHeader.Carat')}}</a>
                      </div>
                      <div class="level-item">
                        <a href="{{url(app()->getLocale())}}/education-diamond-grading/gia-report/4cs/cut">{{trans('frontHeader.Cut')}}</a>
                      </div>
                      <div class="level-item">
                        <a href="{{url(app()->getLocale())}}/education-diamond-grading/gia-report/4cs/color">{{trans('frontHeader.Color')}}</a>
                      </div>
                      <div class="level-item">
                        <a href="{{url(app()->getLocale())}}/education-diamond-grading/gia-report/4cs/clarity">{{trans('frontHeader.Clarity')}}</a>
                    </div>
                   
                    </div>
                  </div>
                </div>
              </div>

              <hr class="navbar-divider">

          <a class="navbar-item " href="{{url(app()->getLocale())}}/education-diamond-grading/grading-certficate">
            <small class="has-text-info">{{trans('frontHeader.Diamond Certificate')}}</small>
          </a>
              <div class="navbar-item">
                <div class="navbar-content">
                  <div class="level is-mobile">
                    <div class="level-left">
                      <div class="level-item">
                        <a href="{{url(app()->getLocale())}}/education-diamond-grading/grading-certficate">{{trans('frontHeader.Certificate')}}</a>
                      </div>
                      <div class="level-item">
                        <a href="{{url(app()->getLocale())}}/education-diamond-grading/gia-report">{{trans('frontHeader.GIA Report')}}</a>
                      </div>
                      <div class="level-item">
                        <a href="{{url(app()->getLocale())}}/education-diamond-grading/grading-eye-clean">{{trans('frontHeader.Eye Clean Diamond')}}</a>
                      </div>
                     
                    </div>
                  </div>
                </div>
              </div>
              
              <hr class="navbar-divider">

          <a class="navbar-item " href="{{url(app()->getLocale())}}/education-diamond-grading/shape">
            <small class="has-text-info">{{trans('frontHeader.Diamond Anatomy')}}</small>
          </a>
              <div class="navbar-item">
                <div class="navbar-content">
                  <div class="level is-mobile">
                    <div class="level-left">
                      <div class="level-item">
                        <a href="{{url(app()->getLocale())}}/education-diamond-grading/shape">{{trans('frontHeader.Shape')}}</a>
                      </div>
                      <div class="level-item">
                        <a href="{{url(app()->getLocale())}}/education-diamond-grading/hearts-and-arrows">{{trans('frontHeader.Heards And Arrows')}}</a>
                      </div>
                      <div class="level-item">
                        <a href="{{url(app()->getLocale())}}/education-diamond-grading/anatomy-proportion">{{trans('frontHeader.Proportion')}}</a>
                      </div>
                      <div class="level-item">
                        <a href="{{url(app()->getLocale())}}/education-diamond-grading/anatomy-symmetry">{{trans('frontHeader.Symmetry')}}</a>
                    </div>
                     <div class="level-item">
                        <a href="{{url(app()->getLocale())}}/education-diamond-grading/anatomy-polish">{{trans('frontHeader.Polish')}}</a>
                      </div>
                      <div class="level-item">
                        <a href="{{url(app()->getLocale())}}/education-diamond-grading/anatomy-fluorescence">{{trans('frontHeader.Fluorescence')}}</a>
                      </div>
                   
                    </div>
                  </div>
                </div>
              </div>


         
                  
        </div>
      </div>
      

      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link  is-active" href="{{url(app()->getLocale())}}/customer-jewellries">
          {{trans('frontHeader.Customer Moments')}}
        </a>
        <div class="navbar-dropdown is-boxed">
          <a class="navbar-item " href="{{url(app()->getLocale())}}/customer-jewellries">
           <div class="navbar-content">
                <p>
                  <small class="has-text-info">{{trans('frontHeader.Wedding Rings')}}</small>
                </p>
                <p>{{trans('frontHeader.Customer Jewellries')}}</p>
              </div>
          </a>

          <hr class="navbar-divider">

          <a class="navbar-item " href="{{url(app()->getLocale())}}/customer-moments">
           <div class="navbar-content">
                <p>{{trans('frontHeader.Customer Moments')}}</p>
              </div>
          </a>

          <hr class="navbar-divider">

          <a class="navbar-item " href="{{url(app()->getLocale())}}/engagement-tips">
           <div class="navbar-content">
                <p><p>{{trans('frontHeader.Engagement Tips')}}</p></p>
              </div>
          </a>
                  
        </div>
      </div>
      
      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link  is-active" href="{{url(app()->getLocale())}}/about-us">
          {{trans('frontHeader.About Us')}}
        </a>
        <div class="navbar-dropdown is-boxed">
          <a class="navbar-item " href="{{url(app()->getLocale())}}/about-us">
           <div class="navbar-content">
                <p>
                  <small class="has-text-info">{{trans('frontHeader.About Us')}}</small>
                </p>
                <p>{{trans('frontHeader.About Us')}}</p>
              </div>
          </a>
          
          <hr class="navbar-divider">

          <a class="navbar-item " href="{{url(app()->getLocale())}}/buying-procedure">
           <div class="navbar-content">
                <p>{{trans('frontHeader.Buying Procedure')}}</p>
              </div>
          </a>
                  
        </div>
      </div>
      
     
     
      
     
    </div>

    <div class="navbar-end">
     
      <!-- <a href="https://github.com/jgthms/bulma" target="_blank">
        <span class="icon" style="color: #333;">
          <i class="fa fa-lg fa-github"></i>
        </span>
      </a> -->
      

      <div class="navbar-item has-dropdown is-hoverable">
        <div class="navbar-link">
          {{trans('frontHeader.Language')}} {{trans('frontHeader.' . strToUpper(app()->getLocale(session('locale')))) }}
        </div>
        <hr class="dropdown-divider">
        <div id="moreDropdown" class="navbar-dropdown is-boxed">
           <a class="navbar-item " :href="'/en' + partialUrl"><img src="/front_end/langs/en.png" width="20" height="10">{{trans('frontHeader.EN')}}</a>
           <a class="navbar-item " :href="'/hk' + partialUrl"><img src="/front_end/langs/hk.png" width="20" height="10">{{trans('frontHeader.HK')}}</a>
           <a class="navbar-item " :href="'/cn' + partialUrl"><img src="/front_end/langs/china.png" width="20" height="10">{{trans('frontHeader.CN')}}</a>


      </div>


      

    </div>
  </div>
</nav>

  <!-- Hero content: will be in the middle -->
  <div class="hero-body">
    <div class="container has-text-centered">
      <a href="/">
      <h1 class="title">
        Ting Diamond
      </h1>
      </a>
      <h2 class="subtitle">
        <strong>The Echo of Love</strong><small> ...from your heart</small>
      </h2>

    </div>
  </div>

  <!-- Hero footer: will stick at the bottom -->
    <div class="hero-foot">
      <nav class="tabs is-boxed is-fullwidth" >
        <div class="container">
          <ul>
            <li :class="{'is-active': activeTab.includes('gia-loose-diamonds') }"><a href=" {{url(app()->getLocale())}}/gia-loose-diamonds">{{trans('frontHeader.Diamonds')}}</a>
            </li>
            <li :class="{'is-active': activeTab.includes('engagement-rings') }"><a href=" {{url(app()->getLocale())}}/engagement-rings">{{trans('frontHeader.Engagement Rings')}}</a></li>
            <li :class="{'is-active': activeTab.includes('wedding-rings') }"><a href=" {{url(app()->getLocale())}}/wedding-rings">{{trans('frontHeader.Wedding Rings')}}</a></li>
            <li :class="{'is-active': activeTab.includes('education-diamond-grading') }"><a href=" {{url(app()->getLocale())}}/education-diamond-grading">{{trans('frontHeader.Education')}}</a></li>
            <li :class="{'is-active': activeTab.includes('customer-jewellries') }"><a href=" {{url(app()->getLocale())}}/customer-jewellries">{{trans('frontHeader.Customer Moments')}}</a></li>
            <li :class="{'is-active': activeTab.includes('about-us') }"><a href=" {{url(app()->getLocale())}}/about-us">{{trans('frontHeader.About Us')}}</a></li>
          </ul>
          <!-- <nav class="navbar has-shadow">
                <ul v-if="activeTab.includes('gia-loose-diamonds') ">
                  <a href="{{url(app()->getLocale())}}/gia-loose-diamonds/round-cut">{{__('frontHeader.Round Diamonds')}}</a>
                  <a href="{{url(app()->getLocale())}}/gia-loose-diamonds/fancy-cut-diamond">{{__('frontHeader.Fancy Cut Diamonds')}}</a>
                  <a href="{{url(app()->getLocale())}}/gia-loose-diamonds/fancy-color">{{__('frontHeader.Fancy Color Diamonds')}}</a>
                
                </ul>

                <ul v-if="activeTab.includes('/engagement-rings')">
                  <a href="{{url(app()->getLocale())}}/engagement-rings/solitaire-ring-setting">{{__('frontHeader.Solitaire Ring')}}</a>
                  <a href="{{url(app()->getLocale())}}/engagement-rings/side-stones-setting">{{__('frontHeader.Side-stone Ring')}}</a>
                  <a href="{{url(app()->getLocale())}}/engagement-rings/halo-setting">{{__('frontHeader.Halo Ring')}}</a>
                 
                </ul>

                <ul v-if="activeTab.includes('wedding-rings')">
                  <a href="{{url(app()->getLocale())}}/wedding-rings/classic">{{__('frontHeader.Classic Ring')}}</a>
                  <a href="{{url(app()->getLocale())}}/wedding-rings/japanese">{{__('frontHeader.Japanese Ring')}}</a>
                  <a href="{{url(app()->getLocale())}}/wedding-rings/vintage">{{__('frontHeader.Vintage Ring')}}</a>
                 
                </ul>

                <ul v-if="activeTab.includes('education-diamond-grading')">
                  <a href="{{url(app()->getLocale())}}/education-diamond-grading/gia-report/4cs">{{__('frontHeader.Diamond Grading')}}</a>
                  <a href="{{url(app()->getLocale())}}/education-diamond-grading/grading-certficate">{{__('frontHeader.Diamond Certficate')}}</a>
                  <a href="{{url(app()->getLocale())}}/education-diamond-grading/shape">{{__('frontHeader.Diamond Anatomy')}}</a>
                  <a>{{__('frontHeader.Fancy Color Diamond')}}</a>
                 
                </ul>

                <ul v-if="activeTab.includes('customer-jewellries') || activeTab.includes('customer-moments') || activeTab.includes('engagement-tips')">
                  <a href="{{url(app()->getLocale())}}/customer-jewellries">{{__('frontHeader.Customer Jewellires')}}</a>
                  <a href="{{url(app()->getLocale())}}/customer-moments">{{__('frontHeader.Customer Moments')}}</a>
                  <a href="{{url(app()->getLocale())}}/engagement-tips">{{__('frontHeader.Engagement Tips')}}</a>
                 
                </ul>

                <ul v-if="activeTab.includes('about-us')  || activeTab.includes('buying-procedure')">
                  <a href="{{url(app()->getLocale())}}/about-us">{{__('frontHeader.About Us')}}</a>
                  <a href="{{url(app()->getLocale())}}/buying-procedure">{{__('frontHeader.Buying Procedure')}}</a>
                 
                </ul>
                 
              </nav> -->
        </div>
      </nav>
    </div>

</section>
<nav class="navbar has-shadow ">
  <div class="container">
    <div class="navbar-tabs " v-if="activeTab.includes('gia-loose-diamonds') ">
      <a class="navbar-item is-tab " href="{{url(app()->getLocale())}}/gia-loose-diamonds/round-cut">{{__('frontHeader.Round Diamonds')}}</a>
      <a class="navbar-item is-tab " href="{{url(app()->getLocale())}}/gia-loose-diamonds/fancy-cut-diamond">{{__('frontHeader.Fancy Cut Diamonds')}}</a>
      <a class="navbar-item is-tab " href="{{url(app()->getLocale())}}/gia-loose-diamonds/fancy-color">{{__('frontHeader.Fancy Color Diamonds')}}</a>
    </div>
    <div class="navbar-tabs" v-if="activeTab.includes('/engagement-rings')">
      <a class="navbar-item is-tab " href="{{url(app()->getLocale())}}/engagement-rings/solitaire-ring-setting">{{__('frontHeader.Solitaire Ring')}}</a>
      <a class="navbar-item is-tab " href="{{url(app()->getLocale())}}/engagement-rings/side-stones-setting">{{__('frontHeader.Side-stone Ring')}}</a>
      <a class="navbar-item is-tab " href="{{url(app()->getLocale())}}/engagement-rings/halo-setting">{{__('frontHeader.Halo Ring')}}</a>
    </div>
    <div class="navbar-tabs" v-if="activeTab.includes('/wedding-rings')">
      <a class="navbar-item is-tab " href="{{url(app()->getLocale())}}/wedding-rings/classic">{{__('frontHeader.Classic Ring')}}</a>
      <a class="navbar-item is-tab " href="{{url(app()->getLocale())}}/wedding-rings/japanese">{{__('frontHeader.Japanese Ring')}}</a>
      <a class="navbar-item is-tab " href="{{url(app()->getLocale())}}/wedding-rings/vintage">{{__('frontHeader.Vintage Ring')}}</a>
    </div>
    <div class="navbar-tabs" v-if="activeTab.includes('/education-diamond-grading')">
      <a class="navbar-item is-tab " href="{{url(app()->getLocale())}}/education-diamond-grading/gia-report/4cs">{{__('frontHeader.Diamond Grading')}}</a>
      <a class="navbar-item is-tab " href="{{url(app()->getLocale())}}/education-diamond-grading/grading-certficate">{{__('frontHeader.Diamond Certficate')}}</a>
      <a class="navbar-item is-tab " href="{{url(app()->getLocale())}}/education-diamond-grading/shape">{{__('frontHeader.Diamond Anatomy')}}</a>
      <a class="navbar-item is-tab " >{{__('frontHeader.Fancy Color Diamond')}}</a>
    </div>
    <div class="navbar-tabs" v-if="activeTab.includes('customer-jewellries') || activeTab.includes('customer-moments') || activeTab.includes('engagement-tips')">
      <a class="navbar-item is-tab " href="{{url(app()->getLocale())}}/customer-jewellries">{{__('frontHeader.Customer Jewellires')}}</a>
      <a class="navbar-item is-tab " href="{{url(app()->getLocale())}}/customer-moments">{{__('frontHeader.Customer Moments')}}</a>
      <a class="navbar-item is-tab " href="{{url(app()->getLocale())}}/engagement-tips">{{__('frontHeader.Engagement Tips')}}</a>
    </div>
    <div class="navbar-tabs" v-if="activeTab.includes('about-us')  || activeTab.includes('buying-procedure')">
      <a class="navbar-item is-tab " href="{{url(app()->getLocale())}}/about-us">{{__('frontHeader.About Us')}}</a>
      <a class="navbar-item is-tab " href="{{url(app()->getLocale())}}/buying-procedure">{{__('frontHeader.Buying Procedure')}}</a>
    </div>
  </div>
</nav>

 </div>

<!-- <script type="text/javascript" src="{{mix('js/app.js')}}"></script> 
 -->
<script type="text/javascript">


  document.addEventListener('DOMContentLoaded', function () {

  // Get all "navbar-burger" elements
  var $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

  // Check if there are any navbar burgers
  if ($navbarBurgers.length > 0) {

    // Add a click event on each of them
    $navbarBurgers.forEach(function ($el) {
      $el.addEventListener('click', function () {

        // Get the target from the "data-target" attribute
        var target = $el.dataset.target;
        var $target = document.getElementById(target);

        // Toggle the class on both the "navbar-burger" and the "navbar-menu"
        $el.classList.toggle('is-active');
        $target.classList.toggle('is-active');

      });
    });
  }

});
</script>

