<div class="tile is-ancestor" v-if="activedSubTab=='Appointment First'">
              
          <div class="tile is-9">

            <center>
              <p class="title is-5">{{trans('buyingProcedure.title1')}}：</p>
              <p>{{trans('buyingProcedure.para1')}}</p>
            </center>
            
                
          </div>

      <div class="tile ">
           <center>
              <p class="title is-5">{{trans('buyingProcedure.title2')}}：</p>
              <p class="title is-6">{{trans('buyingProcedure.title3')}}</p>
              <p >{{trans('buyingProcedure.para2')}}</p>
            </center>
      </div>

      
    </div>
    <div class="tile is-ancestor" v-if="activedSubTab=='Appointment First'">
      
      <div class="tile is-4">
           <a href="/front_end/aboutUs/buyingProcedure/Winnie_Kwong.vcf">
            <center>  
            <figure class="image">
              <p>Mobile Import Winnie</p>
                <img src="/front_end/aboutUs/buyingProcedure/ting.png">
            </figure>
            </center>
          </a>
      </div>

      <div class="tile is-4">
           <a href="/front_end/aboutUs/buyingProcedure/Pete_Kwong.vcf">
            <center>
            <figure class="image">
              <p>Mobile Import Pete</p>
                <img src="/front_end/aboutUs/buyingProcedure/pete.png">
            </figure>
            </center>
           </a>
      </div>
      
    </div>


      <div class="tile is-ancestor" v-if="activedSubTab=='Shop Or GIA Lab'">
      
          <div class="tile is-10">

            <center>
            <li>{{trans('buyingProcedure.para3')}}</li>
            <li>{{trans('buyingProcedure.para4')}}</li>
            
            </center>
            
                
          </div>

          <div class="tile">
               <center>  
                <figure class="image">
                  <p>GIA</p>
                    <img src="/front_end/GIA/GIA-Logo.jpg">
                </figure>
                </center>
          </div>

          
        </div>


        <div class="tile is-ancestor" v-if="activedSubTab=='Choose Ring Setting'|| activedSubTab=='custom-engagement-rings'">
      
          <div class="tile is-5">

            <center>
              <p class="title is-6">{{trans('buyingProcedure.Choose')}} <a class="title is-6" href="">{{trans('buyingProcedure.On Stock Engagaement Ring')}}</a></p>

              <p>{{trans('buyingProcedure.para5')}}</p>

                <figure class="image">
                  
                    <img src="/front_end/aboutUs/buyingProcedure/IMG_0108_1-e1473742419200.jpg">
                </figure>
            </center>
            
                
          </div>

          <div class="tile">
               <center>
              <p class="title is-6">{{trans('buyingProcedure.title4')}}</p>
              <li>{{trans('buyingProcedure.para6')}}</li>
              <li>{{trans('buyingProcedure.para7')}}</li>
              <p class="title is-6">{{trans('buyingProcedure.para7.1')}}</p>
              <figure class="image">
                    <img src="/front_end/aboutUs/buyingProcedure/WhatsApp-Image-2017-01-04-at-7.26.31-PM_1.jpg">
                </figure>

              <li>{{trans('buyingProcedure.para8')}}</li>

              <figure class="image">
                    <img src="/front_end/aboutUs/buyingProcedure/0.7-626x453.jpg">
                </figure>

            </center>
          </div>

          
        </div>


        <div class="tile is-ancestor" v-if="activedSubTab=='Ring Inlay | Engrave'|| activedSubTab=='diamond-inlay-engrave'">
      
          <div class="tile is-10">

            <center>
              <p class="title is-6">{{trans('buyingProcedure.title5')}}</a></p>

              <li>{{trans('buyingProcedure.para9')}}</li>
              <li>{{trans('buyingProcedure.para10')}}</li>

            </center>
            
                
          </div>

          <div class="tile">
               <center>
              <p class="title is-6">{{trans('buyingProcedure.Free Engrave')}}</p>
              <figure class="image">
                    <img src="/front_end/aboutUs/buyingProcedure/engraving-on-a-ring-150x150.jpg">
                </figure>


            </center>
          </div>

          
        </div>

        <div class="tile is-ancestor" v-if="activedSubTab=='Pay With Satisfaction'">
      
          <div class="tile is-10">

            <center>
              <p class="title is-6">{{trans('buyingProcedure.Guarantee Satisfaction')}}</a></p>

              <li>{{trans('buyingProcedure.para11')}}</li>

            </center>
            
                
          </div>

          <div class="tile">
               <center>
              <p class="title is-6">{{trans('buyingProcedure.Guarantee Satisfaction')}}</p>
              <figure class="image">
                    <img src="/front_end/aboutUs/buyingProcedure/39940971-Zufriedenheitsgarantie-Stempel-Lizenzfreie-Bilder-300x300.jpg">
                </figure>


            </center>
          </div>

          
        </div>