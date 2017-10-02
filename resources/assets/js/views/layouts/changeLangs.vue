<div class="dropdown is-hoverable">
    <div class="dropdown-trigger">
      <button class="button is-info" aria-haspopup="true" aria-controls="dropdown-menu4">
        <span>Language</span>
        <span class="icon is-small">
          <i class="fa fa-angle-down" aria-hidden="true"></i>
        </span>
      </button>
    </div>
    <div class="dropdown-menu" id="dropdown-menu4" role="menu">
      <div class="dropdown-content">
        <div class="dropdown-item">
          <router-link :to="'/en' + this.$route.fullPath.slice(3)" >EN</router-link>
          <hr class="dropdown-divider">
          <router-link :to="'/hk' + this.$route.fullPath.slice(3)" >HK</router-link>
          <hr class="dropdown-divider">
          <router-link :to="'/cn' + this.$route.fullPath.slice(3)" >CN</router-link>
        </div>
      </div>
    </div>
</div>