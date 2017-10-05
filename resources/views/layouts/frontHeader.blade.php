<div id="header">
<section class="hero is-primary is-bold">
  <!-- Hero header: will stick at the top -->
   <nav  class="navbar is-transparent">
  <div class="navbar-brand">
    <a class="navbar-item" href="./">
      <img src="/images/company/logo_PNG_sq_60x60_1.png" alt="Bulma: a modern CSS framework based on Flexbox" width="35" height="70">
    </a>

    <router-link class="navbar-item is-hidden-desktop"  :to="'/en' + this.$route.fullPath.slice(3)" >
      <img src="/images/langs/en.png" width="20" height="10">
      </router-link>
      <router-link class="navbar-item is-hidden-desktop"  :to="'/hk' + this.$route.fullPath.slice(3)" >
      <img src="/images/langs/hk.png" width="20" height="10">
      </router-link>
      <router-link class="navbar-item is-hidden-desktop"  :to="'/cn' + this.$route.fullPath.slice(3)" >
      <img src="/images/langs/china.png" width="20" height="10">
      </router-link>

    <!-- <a class="navbar-item is-hidden-desktop" href="https://github.com/jgthms/bulma" target="_blank">
      <span class="icon" style="color: #333;">
        <i class="fa fa-lg fa-github"></i>
      </span>
    </a>

    <a class="navbar-item is-hidden-desktop" href="https://twitter.com/jgthms" target="_blank">
      <span class="icon" style="color: #55acee;">
        <i class="fa fa-lg fa-twitter"></i>
      </span>
    </a> -->

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
          Diamond
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
          Language {{app()->getLocale(session('locale'))}}
        </div>
        <hr class="dropdown-divider">
        <div id="moreDropdown" class="navbar-dropdown is-boxed">
           
             <router-link @click="setLocale('en')" class="navbar-item " :to="'/en' + this.$route.fullPath.slice(3)" ><img src="/images/langs/en.png" width="20" height="10">EN</router-link>
            <router-link @click="setLocale('hk')" class="navbar-item " :to="'/hk' + this.$route.fullPath.slice(3)" ><img src="/images/langs/hk.png" width="20" height="10">HK</router-link>
              <router-link class="navbar-item " :to="'/cn' + this.$route.fullPath.slice(3)" ><img src="/images/langs/china.png" width="20" height="10">CN</router-link>
        </div>
      </div>

<!-- 
      <div class="dropdown is-hoverable">
    <div class="dropdown-trigger">
      <a class="button" aria-haspopup="true" aria-controls="dropdown-menu4">
        <span>Language</span>
        <span class="icon is-small">
          <i class="fa fa-angle-down" aria-hidden="true"></i>
        </span>
      </a> 

        </div>

            <div class="dropdown-menu" id="dropdown-menu4" role="menu">
              <div class="dropdown-content">
                <div class="dropdown-item">
                 
                </div>
              </div>
            </div>
        </div> -->

      

    </div>
  </div>
</nav>

  <!-- Hero content: will be in the middle -->
  <div class="hero-body">
    <div class="container has-text-centered">
      <h1 class="title">
        Ting Diamond
      </h1>
      <h2 class="subtitle">
        The Echo of love
      </h2>
    </div>
  </div>

  <!-- Hero footer: will stick at the bottom -->
    <div class="hero-foot">
      <nav class="tabs ">
        <div class="container">
          <ul>
            <li class="is-active"><a href=" {{url(app()->getLocale())}}/gia-loose-diamonds">Diamonds</a>
            </li>
            <li><a href=" {{url(app()->getLocale())}}/engagement-rings">Engagement Rings</a></li>
            <li><a href=" {{url(app()->getLocale())}}/wedding-rings">Wedding Rings</a></li>
            <li><a href=" {{url(app()->getLocale())}}/buying-procedure">Buying Procedure</a></li>
            <li><a href=" {{url(app()->getLocale())}}/education-diamond-grading">Education</a></li>
            <li><a href=" {{url(app()->getLocale())}}/customer-jewellries">Customer Jewellries</a></li>
            <li><a href=" {{url(app()->getLocale())}}/about-us'">About</a></li>
          </ul>
          <div class="tabs">
                <ul>
                  <li class="is-active"><a>Pictures</a></li>
                  <li><a>Music</a></li>
                  <li><a>Videos</a></li>
                  <li><a>Documents</a></li>
                </ul>
              </div>
        </div>
      </nav>
    </div>

 

</section>
 </div>

<script type="text/javascript" src="{{mix('js/app.js')}}"></script> 

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

