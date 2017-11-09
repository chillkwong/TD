<div class="tabs is-centered">
          <ul>
            <li :class="{'is-active': activedSubTab=='carat' || activedSubTab=='gia-report/4cs/carat' }" @click="activeSubTab('carat')" ><a href="{{url(app()->getLocale())}}/education-diamond-grading/gia-report/4cs/carat">Diamond Carat</a></li>
            <li :class="{'is-active': activedSubTab=='cut' || activedSubTab=='gia-report/4cs/cut' }" @click="activeSubTab('cut')" ><a href="{{url(app()->getLocale())}}/education-diamond-grading/gia-report/4cs/cut">Diamond Cut </a></li>
            <li :class="{'is-active': activedSubTab=='color' || activedSubTab=='gia-report/4cs/color'}" @click="activeSubTab('color')"><a href="{{url(app()->getLocale())}}/education-diamond-grading/gia-report/4cs/color">Diamond Color</a></li>
            <li :class="{'is-active': activedSubTab=='clarity' || activedSubTab=='gia-report/4cs/clarity'}" @click="activeSubTab('clarity')"><a href="{{url(app()->getLocale())}}/education-diamond-grading/gia-report/4cs/clarity">Diamond Clarity</a></li>
            
          </ul>
        </div>