<div class="tabs is-centered">
          <ul>
            <li :class="{'is-active': activedSubTab=='shape' }" @click="activeSubTab('shape')" ><a href="{{url(app()->getLocale())}}/education-diamond-grading/shape">Diamond Shape</a></li>
            <li :class="{'is-active': activedSubTab=='hearts-and-arrows' }" @click="activeSubTab('hearts-and-arrows')" ><a href="{{url(app()->getLocale())}}/education-diamond-grading/hearts-and-arrows">Hearts And Arrows diamond</a></li>
            <li :class="{'is-active': activedSubTab=='anatomy-proportion' }" @click="activeSubTab('anatomy-proportion')" ><a href="{{url(app()->getLocale())}}/education-diamond-grading/anatomy-proportion">Anatomy Proportion</a></li>
            <li :class="{'is-active': activedSubTab=='anatomy-symmetry' }" @click="activeSubTab('anatomy-symmetry')" ><a href="{{url(app()->getLocale())}}/education-diamond-grading/anatomy-symmetry">Anatomy Symmetry</a></li>
            <li :class="{'is-active': activedSubTab=='anatomy-polish' }" @click="activeSubTab('anatomy-polish')" ><a href="{{url(app()->getLocale())}}/education-diamond-grading/anatomy-polish">Anatomy Polish</a></li>
            <li :class="{'is-active': activedSubTab=='anatomy-fluorescence' }" @click="activeSubTab('anatomy-fluorescence')" ><a href="{{url(app()->getLocale())}}/education-diamond-grading/anatomy-fluorescence">Anatomy Fluorescence</a></li>
            
          </ul>
        </div>