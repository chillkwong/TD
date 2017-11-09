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
   

    <div class="navbar-burger burger" data-target="navMenuTransparentExample">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>

  <div id="navMenuTransparentExample" class="navbar-menu">
    <div class="navbar-start">
      
      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link  is-active" href="{{url(app()->getLocale())}}">
          {{trans('frontHeader.Diamonds')}}
        </a>
        <div class="navbar-dropdown is-boxed">
          <a class="navbar-item " href="/documentation/overview/start/">
            Loose Diamond
          </a>
          <a class="navbar-item " href="http://bulma.io/documentation/modifiers/syntax/">
            Modifiers
          </a>
          <a class="navbar-item " href="http://bulma.io/documentation/columns/basics/">
            Columns
          </a>
          <a class="navbar-item " href="http://bulma.io/documentation/layout/container/">
            Layout
          </a>
          <a class="navbar-item " href="http://bulma.io/documentation/form/general/">
            Form
          </a>
          <a class="navbar-item " href="http://bulma.io/documentation/elements/box/">
            Elements
          </a>
          
            <a class="navbar-item is-active" href="http://bulma.io/documentation/components/breadcrumb/">
              Components
            </a>
          
          <hr class="navbar-divider">
          <div class="navbar-item">
            <div>
              <p class="is-size-6-desktop">
                <strong class="has-text-info">0.5.2</strong>
              </p>
              
                <small>
                  <a class="bd-view-all-versions" href="/versions">View all versions</a>
                </small>
              
            </div>
          </div>
        </div>
      </div>


      
      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link  is-active" href="{{url(app()->getLocale())}}">
          {{trans('frontHeader.Engagement Rings')}}
        </a>
        <div class="navbar-dropdown is-boxed">
          <a class="navbar-item " href="/documentation/overview/start/">
            Loose Diamond
          </a>
          <a class="navbar-item " href="http://bulma.io/documentation/modifiers/syntax/">
            Modifiers
          </a>
          <a class="navbar-item " href="http://bulma.io/documentation/columns/basics/">
            Columns
          </a>
          <a class="navbar-item " href="http://bulma.io/documentation/layout/container/">
            Layout
          </a>
          <a class="navbar-item " href="http://bulma.io/documentation/form/general/">
            Form
          </a>
          <a class="navbar-item " href="http://bulma.io/documentation/elements/box/">
            Elements
          </a>
          
            <a class="navbar-item is-active" href="http://bulma.io/documentation/components/breadcrumb/">
              Components
            </a>
          
          <hr class="navbar-divider">
          <div class="navbar-item">
            <div>
              <p class="is-size-6-desktop">
                <strong class="has-text-info">0.5.2</strong>
              </p>
              
                <small>
                  <a class="bd-view-all-versions" href="/versions">View all versions</a>
                </small>
              
            </div>
          </div>
        </div>
      </div>

      
      
      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link  is-active" href="{{url(app()->getLocale())}}">
          {{trans('frontHeader.Wedding Rings')}}
        </a>
        <div class="navbar-dropdown is-boxed">
          <a class="navbar-item " href="/documentation/overview/start/">
            Loose Diamond
          </a>
          <a class="navbar-item " href="http://bulma.io/documentation/modifiers/syntax/">
            Modifiers
          </a>
          <a class="navbar-item " href="http://bulma.io/documentation/columns/basics/">
            Columns
          </a>
          <a class="navbar-item " href="http://bulma.io/documentation/layout/container/">
            Layout
          </a>
          <a class="navbar-item " href="http://bulma.io/documentation/form/general/">
            Form
          </a>
          <a class="navbar-item " href="http://bulma.io/documentation/elements/box/">
            Elements
          </a>
          
            <a class="navbar-item is-active" href="http://bulma.io/documentation/components/breadcrumb/">
              Components
            </a>
          
          <hr class="navbar-divider">
          <div class="navbar-item">
            <div>
              <p class="is-size-6-desktop">
                <strong class="has-text-info">0.5.2</strong>
              </p>
              
                <small>
                  <a class="bd-view-all-versions" href="/versions">View all versions</a>
                </small>
              
            </div>
          </div>
        </div>
      </div>

      
      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link " href="http://bulma.io/blog/">
          Blog
        </a>
        <div id="blogDropdown" class="navbar-dropdown is-boxed" data-style="width: 18rem;">
          
            <a class="navbar-item" href="/2017/08/03/list-of-tags/">
              <div class="navbar-content">
                <p>
                  <small class="has-text-info">03 Aug 2017</small>
                </p>
                <p>New feature: list of tags</p>
              </div>
            </a>
          
            <a class="navbar-item" href="/2017/08/01/bulma-bootstrap-comparison/">
              <div class="navbar-content">
                <p>
                  <small class="has-text-info">01 Aug 2017</small>
                </p>
                <p>Bulma / Bootstrap comparison</p>
              </div>
            </a>
          
            <a class="navbar-item" href="/2017/07/24/access-previous-bulma-versions/">
              <div class="navbar-content">
                <p>
                  <small class="has-text-info">24 Jul 2017</small>
                </p>
                <p>Access previous Bulma versions</p>
              </div>
            </a>
          
          <a class="navbar-item" href="http://bulma.io/blog/">
            More posts
          </a>
          <hr class="navbar-divider">
          <div class="navbar-item">
            <div class="navbar-content">
              <div class="level is-mobile">
                <div class="level-left">
                  <div class="level-item">
                    <strong>Stay up to date!</strong>
                  </div>
                </div>
                <div class="level-right">
                  <div class="level-item">
                    <a class="button bd-is-rss is-small" href="http://bulma.io/atom.xml">
                      <span class="icon is-small">
                        <i class="fa fa-rss"></i>
                      </span>
                      <span>Subscribe</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      

      <div class="navbar-item has-dropdown is-hoverable">
        <div class="navbar-link">
          More
        </div>
        <div id="moreDropdown" class="navbar-dropdown is-boxed">
          <a class="navbar-item " href="http://bulma.io/extensions/">
            <div class="level is-mobile">
              <div class="level-left">
                <div class="level-item">
                  <p>
                    <strong>Extensions</strong>
                    <br>
                    <small>Side projects to enhance Bulma</small>
                  </p>
                </div>
              </div>
              <div class="level-right">
                <div class="level-item">
                  <span class="icon has-text-info">
                    <i class="fa fa-plug"></i>
                  </span>
                </div>
              </div>
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
      <a class="navbar-item is-hidden-desktop-only" href="https://twitter.com/jgthms" target="_blank">
        <span class="icon" style="color: #55acee;">
          <i class="fa fa-lg fa-twitter"></i>
        </span>
      </a>

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
      <nav class="tabs is-fullwidth" >
        <div class="container">
          <ul>
            <li :class="{'is-active': activeTab=='gia-loose-diamonds' || activeTab=='' }"><a href=" {{url(app()->getLocale())}}/gia-loose-diamonds">{{trans('frontHeader.Diamonds')}}</a>
            </li>
            <li :class="{'is-active': activeTab=='engagement-rings'}"><a href=" {{url(app()->getLocale())}}/engagement-rings">{{trans('frontHeader.Engagement Rings')}}</a></li>
            <li :class="{'is-active': activeTab=='wedding-rings'}"><a href=" {{url(app()->getLocale())}}/wedding-rings">{{trans('frontHeader.Wedding Rings')}}</a></li>
            <li :class="{'is-active': activeTab=='education-diamond-grading'}"><a href=" {{url(app()->getLocale())}}/education-diamond-grading">{{trans('frontHeader.Education')}}</a></li>
            <li :class="{'is-active': activeTab=='customer-jewellries'}"><a href=" {{url(app()->getLocale())}}/customer-jewellries">{{trans('frontHeader.Customer Moments')}}</a></li>
            <li :class="{'is-active': activeTab=='about-us'}"><a href=" {{url(app()->getLocale())}}/about-us">{{trans('frontHeader.About Us')}}</a></li>
          </ul>
          <div class="tabs">
                <ul v-if="activeTab=='gia-loose-diamonds' || activeTab.includes('gia-loose-diamonds/') ">
                  <li ><a href="{{url(app()->getLocale())}}/gia-loose-diamonds/round-cut">{{__('frontHeader.Round Diamonds')}}</a></li>
                  <li ><a href="{{url(app()->getLocale())}}/gia-loose-diamonds/fancy-cut-diamond">{{__('frontHeader.Fancy Cut Diamonds')}}</a></li>
                  <li ><a href="{{url(app()->getLocale())}}/gia-loose-diamonds/fancy-color">{{__('frontHeader.Fancy Color Diamonds')}}</a></li>
                
                </ul>

                <ul v-if="activeTab=='engagement-rings' || activeTab.includes('engagement-rings/')">
                  <li ><a href="{{url(app()->getLocale())}}/engagement-rings/solitaire-ring-setting">{{__('frontHeader.Solitaire Ring')}}</a></li>
                  <li ><a href="{{url(app()->getLocale())}}/engagement-rings/side-stones-setting">{{__('frontHeader.Side-stone Ring')}}</a></li>
                  <li ><a href="{{url(app()->getLocale())}}/engagement-rings/halo-setting">{{__('frontHeader.Halo Ring')}}</a></li>
                 
                </ul>

                <ul v-if="activeTab=='wedding-rings' || activeTab.includes('wedding-rings/')">
                  <li ><a href="{{url(app()->getLocale())}}/wedding-rings/classic">{{__('frontHeader.Classic Ring')}}</a></li>
                  <li ><a href="{{url(app()->getLocale())}}/wedding-rings/japanese">{{__('frontHeader.Japanese Ring')}}</a></li>
                  <li ><a href="{{url(app()->getLocale())}}/wedding-rings/vintage">{{__('frontHeader.Vintage Ring')}}</a></li>
                 
                </ul>

                <ul v-if="activeTab=='education-diamond-grading' || activeTab.includes('education-diamond-grading/')">
                  <li ><a href="{{url(app()->getLocale())}}/education-diamond-grading/gia-report/4cs">{{__('frontHeader.Diamond Grading')}}</a></li>
                  <li ><a href="{{url(app()->getLocale())}}/education-diamond-grading/grading-certficate">{{__('frontHeader.Diamond Certficate')}}</a></li>
                  <li ><a href="{{url(app()->getLocale())}}/education-diamond-grading/shape">{{__('frontHeader.Diamond Anatomy')}}</a></li>
                  <li ><a>{{__('frontHeader.Fancy Color Diamond')}}</a></li>
                 
                </ul>

                <ul v-if="activeTab=='customer-jewellries' || activeTab.includes('customer-jewellries/')">
                  <li ><a href="{{url(app()->getLocale())}}/customer-jewellries">{{__('frontHeader.Customer Jewellires')}}</a></li>
                  <li ><a href="{{url(app()->getLocale())}}/customer-moments">{{__('frontHeader.Customer Moments')}}</a></li>
                  <li ><a href="{{url(app()->getLocale())}}/engagement-tips">{{__('frontHeader.Engagement Tips')}}</a></li>
                 
                </ul>

                <ul v-if="activeTab=='about-us' || activeTab=='buying-procedure'">
                  <li ><a href="{{url(app()->getLocale())}}/about-us">{{__('frontHeader.About Us')}}</a></li>
                  <li ><a href="{{url(app()->getLocale())}}/buying-procedure">{{__('frontHeader.Buying Procedure')}}</a></li>
                 
                </ul>
                 
              </div>
        </div>
      </nav>
    </div>

 

</section>
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

