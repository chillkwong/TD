<div class="tabs is-centered">
          <ul>
            <li :class="{'is-active': activedSubTab=='grading-certficate' }" @click="activeSubTab('grading-certficate')" ><a href="{{url(app()->getLocale())}}/education-diamond-grading/grading-certficate">Diamond certficate</a></li>
            <li :class="{'is-active': activedSubTab=='gia-report' }" @click="activeSubTab('gia-report')" ><a href="{{url(app()->getLocale())}}/education-diamond-grading/gia-report">Gia Report </a></li>
            <li :class="{'is-active': activedSubTab=='grading-eye-clean' }" @click="activeSubTab('grading-eye-clean')"><a href="{{url(app()->getLocale())}}/education-diamond-grading/grading-eye-clean">Eye Clean Diamond</a></li>
           
            
          </ul>
        </div>