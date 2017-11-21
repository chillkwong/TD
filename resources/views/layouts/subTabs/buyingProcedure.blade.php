 <div class="tabs is-centered">
          <ul>
            <li :class="{'is-active': activedSubTab=='Appointment First' }" @click="activeSubTab('Appointment First')" ><a>Appointment First</a></li>
            <li :class="{'is-active': activedSubTab=='Shop Or GIA Lab' }" @click="activeSubTab('Shop Or GIA Lab')" ><a>Shop Or GIA Lab </a></li>
            <li :class="{'is-active': activedSubTab=='Choose Ring Setting' || activedSubTab=='custom-engagement-rings' }" @click="activeSubTab('Choose Ring Setting')"><a href="{{url(app()->getLocale())}}/buying-procedure/custom-engagement-rings">Choose Ring Setting</a></li>
            <li :class="{'is-active': activedSubTab=='Ring Inlay | Engrave' || activedSubTab=='diamond-inlay-engrave'}"  @click="activeSubTab('Ring Inlay | Engrave')"><a href="{{url(app()->getLocale())}}/buying-procedure/diamond-inlay-engrave">Ring Inlay | Engrave</a></li>
            <li :class="{'is-active': activedSubTab=='Pay With Satisfaction' }" @click="activeSubTab('Pay With Satisfaction')"><a>Pay With Satisfaction</a></li>
          </ul>
        </div>