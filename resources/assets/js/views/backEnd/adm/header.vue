<template>
<nav class="navbar">
  <div class="navbar-brand">
    <a class="navbar-item" href="/adm">
      <img src="/front_end/company/logo_PNG_sq_60x60_1.png" alt="Bulma: a modern CSS framework based on Flexbox" width="40" height="200">
    </a>

    <a class="navbar-item is-hidden-desktop" href="/adm" target="_blank">
      <span class="icon" style="color: #333;">
        <i class="fa fa-github"></i>
      </span>
    </a>

    <a class="navbar-item is-hidden-desktop" href="/adm" target="_blank">
      <span class="icon" style="color: #55acee;">
        <i class="fa fa-twitter"></i>
      </span>
    </a>
    <div class="navbar-burger burger " data-target="navMenubd-example">
      <span></span>
      <span></span>
      <span></span>
   
    </div>
  </div>

  <div id="navMenubd-example" class="navbar-menu">
    <div class="navbar-start">

          <div class="navbar-item has-dropdown is-hoverable">
              <a class="navbar-link is-active" href="/adm/invoices">
                Invoice
              </a>
              <div id="blogDropdown" class="navbar-dropdown " data-style="width: 18rem;">
                
                  <a class="navbar-item" href="/adm/invoices">
                    <div class="columns">
                      <div class="column">
                        <div class="navbar-content">
                          <p>
                            <small class="has-text-info">Invoice</small>
                          </p>
                         <div class="level is-mobile">
                              <div class="navbar-item">
                                <a href="/adm/invoices">Show</a>
                              </div>
                              <div class="navbar-item">
                                <a href="/adm/invoices/create">Create</a>
                              </div>
                         </div>
                        </div>
                      </div>
                    </div>
                  </a>

                  <hr class="navbar-divider">

                  <a class="navbar-item" href="/adm/customers">
                    <div class="columns">
                      <div class="column">
                        <div class="navbar-content">
                          <p>
                            <small class="has-text-info">Customers</small>
                          </p>
                         <div class="level is-mobile">
                              <div class="navbar-item">
                                <a href="/adm/customers">Show</a>
                              </div>
                              <div class="navbar-item">
                                <a href="/adm/customers/create">Create</a>
                              </div>
                         </div>
                        </div>
                      </div>
                    </div>
                  </a>
                  
                 <hr class="navbar-divider">


                  <a class="navbar-item" href="/adm/inv-diamonds">
                    <div class="columns">
                      <div class="column">
                        <div class="navbar-content">
                          <p>
                            <small class="has-text-info">Diamonds</small>
                          </p>
                         <div class="level is-mobile">
                              <div class="navbar-item">
                                <a href="/adm/inv-diamonds">Show</a>
                              </div>
                         </div>
                        </div>
                      </div>
                    </div>
                  </a>

                  <hr class="navbar-divider">

                  <a class="navbar-item" href="/adm/jewellries">
                    <div class="columns">
                      <div class="column">
                        <div class="navbar-content">
                          <p>
                            <small class="has-text-info">Jewellries</small>
                          </p>
                         <div class="level is-mobile">
                              <div class="navbar-item">
                                <a href="/adm/jewellries">Show</a>
                              </div>
                              <div class="navbar-item">
                                <a href="/adm/jewellries/create">Create</a>
                              </div>
                         </div>
                        </div>
                      </div>
                    </div>
                  </a>

                  <hr class="navbar-divider">

                  <a class="navbar-item" href="/en/customer-jewellries">
                    <div class="columns">
                      <div class="column">
                        <div class="navbar-content">
                          <p>
                            <small class="has-text-info">Customer Jewellries</small>
                          </p>
                         <div class="level is-mobile">
                              <div class="navbar-item">
                                <a href="/en/customer-jewellries">Show</a>
                              </div>
                              <div class="navbar-item">
                                <a href="/adm/customer-jewellries/create">Create</a>
                              </div>
                         </div>
                        </div>
                      </div>
                    </div>
                  </a>

              </div>
          </div>


      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link " href="/adm/diamonds/create">
          Diamonds
        </a>
        <div id="blogDropdown" class="navbar-dropdown " data-style="width: 18rem;">
          
            <a class="navbar-item" href="/adm/diamonds">
              <div class="navbar-content">
                <p>
                  <small class="has-text-info">Show all Diamond</small>
                </p>
                <p>Show</p>
              </div>
            </a>
          
            <a class="navbar-item" href="/adm/diamonds/create">
              <div class="navbar-content">
                <p>
                  <small class="has-text-info">Import new Diamonds</small>
                </p>
                <p>Create</p>
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
              <a class="navbar-link " href="/adm/items">
                Items
              </a>
              <div id="blogDropdown" class="navbar-dropdown " data-style="width: 18rem;">
                
                  <a class="navbar-item" href="/adm/items">
                    <div class="navbar-content">
                      <p>
                        <small class="has-text-info">Show all Items</small>
                      </p>
                      <p>Show</p>
                    </div>
                  </a>
                
                  <a class="navbar-item" href="/adm/items/create">
                    <div class="navbar-content">
                      <p>
                        <small class="has-text-info">Add new Items</small>
                      </p>
                      <p>Create</p>
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
        <div id="moreDropdown" class="navbar-dropdown ">
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
      <a class="navbar-item " href="http://bulma.io/expo/">
        <span class="bd-emoji">⭐️</span>
        Expo
      </a>
      <a class="navbar-item " href="http://bulma.io/love/">
        <span class="bd-emoji">❤️</span>
        Love
      </a>
    </div>

    <div class="navbar-end">
      <a class="navbar-item is-hidden-desktop-only" href="https://github.com/jgthms/bulma" target="_blank">
        <span class="icon" style="color: #333;">
          <i class="fa fa-github"></i>
        </span>
      </a>
      <a class="navbar-item is-hidden-desktop-only" href="https://twitter.com/jgthms" target="_blank">
        <span class="icon" style="color: #55acee;">
          <i class="fa fa-twitter"></i>
        </span>
      </a>
      <div class="navbar-item">
        <div class="field is-grouped">
          <p class="control">
            <a class="bd-tw-button button"
  data-social-network="Twitter"
  data-social-action="tweet"
  data-social-target="http://bulma.io"
  target="_blank"
  href="https://twitter.com/intent/tweet?text=Bulma: a modern CSS framework based on Flexbox&hashtags=bulmaio&url=http://bulma.io&via=jgthms">
  <span class="icon">
    <i class="fa fa-twitter"></i>
  </span>
  <span>
    Tweet
  </span>
</a>

          </p>
          <p class="control">
            <a class="button is-primary" href="https://github.com/jgthms/bulma/archive/0.5.1.zip">
              <span class="icon">
                <i class="fa fa-download"></i>
              </span>
              <span>Download</span>
            </a>
          </p>
        </div>
      </div>
    </div>
  </div>
</nav>

</template>

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


  import Auth from '../../../store/auth.js'


  export default{
    props: ['images'],
    data(){
      return {
            navBurger: true
      }
    },
    methods:{
      toggleNav(){
          this.navBurger = !this.navBurger
        }
    },
    created(){
      // if (!Auth.state.api_token && !Auth.state.user_id) {
      //   this.$router.push('/td-login')
      // }
    }
  }


</script>