
        <nav >
          <div class="navbar-item is-hidden-mobile">
            <div class="tile is-ancestor">
                <div class="tile is-12">
                    <div class="tile is-parent">
                        <article class="tile is-child box " >
                            <div>{{trans('diamondSearch.Shape')}}</div>
                            <button v-for="(value, index) in query.search_conditions.shape" class="button " :class=" {'is-info active' : query.search_conditions.shape[index].clicked} " type="button" @click="toggleValue(query.search_conditions.shape[index].clicked,'shape', index)"><img :src="'/front_end/diamond_shapes/'+query.search_conditions.shape[index].description + '.png'" height="20" width="20"></button>
                        </article>
                            <article class="tile is-child box is-info" >

                            <div><h1 class="subtitle is-6">{{trans('diamondSearch.Price')}}</h1></div>
                            <div class="level">
                                <input class="input" type="text" @keyup="fetchIndexData()" v-model="fetchData.priceRange[0]" @focus="$event.target.select()">

                                <input class="input" type="text" @keyup="fetchIndexData()" v-model="fetchData.priceRange[1]" @focus="$event.target.select()">
                            </div>              
                            </article>

                            <article class="tile is-child box" >
                            <div><h1 class="subtitle is-6"> {{trans('diamondSearch.Weight')}} </h1></div>
                            <div class="level">
                                <input class="input" type="text" @keyup="fetchIndexData()" v-model="fetchData.weight[0]" @focus="$event.target.select()">

                                <input class="input" type="text" @keyup="fetchIndexData()" v-model="fetchData.weight[1]" @focus="$event.target.select()">       
                            </div>              
                            </article>
                        </div>
                </div>
            </div>
            </div>
        </nav>

        <nav >
            <div class="navbar-item is-hidden-mobile">
            <div class="tile is-ancestor">
                <div class="tile is-12">
                    <div class="tile is-parent">
                        <article class="tile is-child box " >
                            <div>{{trans('diamondSearch.Color')}}</div>
                            <input v-for="(value, index) in query.search_conditions.color" class="button " :class=" {'is-info active' : query.search_conditions.color[index].clicked} " type="button" @click="toggleValue(query.search_conditions.color[index].clicked,'color', index)" :value="query.search_conditions.color[index].description"> 
                        </article>

                        <article class="tile is-child box" >
                            <div>{{trans('diamondSearch.Clarity')}}</div>
                            <input v-for="(value, index) in query.search_conditions.clarity " class=" button " :class=" {'is-info active' : query.search_conditions.clarity[index].clicked} " type="button" @click="toggleValue(query.search_conditions.clarity[index].clicked,'clarity', index)" :value="query.search_conditions.clarity[index].description"> 
                        </article>

                        <article class="tile is-child box" >
                            <div>{{trans('diamondSearch.Cut')}}</div>
                            <input v-for="(value, index) in query.search_conditions.cut " class=" button " :class=" {'is-info active' : query.search_conditions.cut[index].clicked} " type="button" @click="toggleValue(query.search_conditions.cut[index].clicked,'cut', index)" :value="query.search_conditions.cut[index].description"> 
                        </article>
                    </div>
                </div>
            </div>

          </div>
        </nav>

        <div class="level is-hidden-mobile">
            <div class="level-item is-centered">
            <button class="button is-info" @click="showAdvance=!showAdvance">{{trans('diamondSearch.More Advance')}}</button>
            </div>
        </div>
        <nav >
            <div class="navbar-item is-hidden-mobile">
            <div class="tile is-ancestor" v-if="showAdvance" >
                <div class="tile is-12">
                    <div class="tile is-parent">
                        <article class="tile is-child box " >
                            <div>{{trans('diamondSearch.Polish')}}</div>
                            <input v-for="(value, index) in query.search_conditions.polish" class="button " :class=" {'is-info active' : query.search_conditions.polish[index].clicked} " type="button" @click="toggleValue(query.search_conditions.polish[index].clicked,'polish', index)" :value="query.search_conditions.polish[index].description"> 
                        </article>

                        <article class="tile is-child box" >
                            <div>{{trans('diamondSearch.Symmetry')}}</div>
                            <input v-for="(value, index) in query.search_conditions.symmetry " class=" button " :class=" {'is-info active' : query.search_conditions.symmetry[index].clicked} " type="button" @click="toggleValue(query.search_conditions.symmetry[index].clicked,'symmetry', index)" :value="query.search_conditions.symmetry[index].description"> 
                        </article>

                        <article class="tile is-child box" >
                            <div>{{trans('diamondSearch.Fluorescence')}}</div>
                            <input v-for="(value, index) in query.search_conditions.fluorescence " class=" button " :class=" {'is-info active' : query.search_conditions.fluorescence[index].clicked} " type="button" @click="toggleValue(query.search_conditions.fluorescence[index].clicked,'fluorescence', index)" :value="query.search_conditions.fluorescence[index].description"> 
                        </article>
                    </div>
                </div>
            </div>

          </div>
        </nav>



    <nav >
    <div class="navbar-item is-hidden-desktop is-hidden-tablet is-centered">

    <div @click="showModal=!showModal">

    <center>
    <button class="button is-info ">{{trans('diamondSearch.Search Diamonds')}}</button>
    </center>

    <div class="modal" :class="{ 'is-active':showModal}">
      <div class="modal-background"></div>
      <div class="modal-card">
       <!--  <header class="modal-card-head">
          <p class="modal-card-title">Modal title</p>
          <button class="delete" aria-label="close"></button>
        </header> -->
        <section class="modal-card-body" @click="showModal=!showModal">
          <!-- Content ... -->


            <div class="tile is-ancestor">
                <div class="tile is-12">
                    <div class="tile is-parent">
                        <article class="tile is-child box " >
                            <div>{{trans('diamondSearch.Shape')}}</div>
                            <button v-for="(value, index) in query.search_conditions.shape" class="button " :class=" {'is-info active' : query.search_conditions.shape[index].clicked} " type="button" @click="toggleValue(query.search_conditions.shape[index].clicked,'shape', index)"><img :src="'/front_end/diamond_shapes/'+query.search_conditions.shape[index].description + '.png'" height="20" width="20"></button>
                        </article>
                            <article class="tile is-child box is-info" >

                            <div><h1 class="subtitle is-6">{{trans('diamondSearch.Price')}}</h1></div>
                            <div class="level">
                                <input class="input" type="text" @keyup="fetchIndexData()" v-model="fetchData.priceRange[0]" @focus="$event.target.select()">

                                <input class="input" type="text" @keyup="fetchIndexData()" v-model="fetchData.priceRange[1]" @focus="$event.target.select()">
                            </div>              
                            </article>

                            <article class="tile is-child box" >
                            <div><h1 class="subtitle is-6"> {{trans('diamondSearch.Weight')}} </h1></div>
                            <div class="level">
                                <input class="input" type="text" @keyup="fetchIndexData()" v-model="fetchData.weight[0]" @focus="$event.target.select()">

                                <input class="input" type="text" @keyup="fetchIndexData()" v-model="fetchData.weight[1]" @focus="$event.target.select()">       
                            </div>              
                            </article>
                        </div>
                </div>
            </div>
        
        
        
            <div class="tile is-ancestor">
                <div class="tile is-12">
                    <div class="tile is-parent">
                        <article class="tile is-child box " >
                            <div>{{trans('diamondSearch.Color')}}</div>
                            <input v-for="(value, index) in query.search_conditions.color" class="button " :class=" {'is-info active' : query.search_conditions.color[index].clicked} " type="button" @click="toggleValue(query.search_conditions.color[index].clicked,'color', index)" :value="query.search_conditions.color[index].description"> 
                        </article>

                        <article class="tile is-child box" >
                            <div>{{trans('diamondSearch.Clarity')}}</div>
                            <input v-for="(value, index) in query.search_conditions.clarity " class=" button " :class=" {'is-info active' : query.search_conditions.clarity[index].clicked} " type="button" @click="toggleValue(query.search_conditions.clarity[index].clicked,'clarity', index)" :value="query.search_conditions.clarity[index].description"> 
                        </article>

                        <article class="tile is-child box" >
                            <div>{{trans('diamondSearch.Cut')}}</div>
                            <input v-for="(value, index) in query.search_conditions.cut " class=" button " :class=" {'is-info active' : query.search_conditions.cut[index].clicked} " type="button" @click="toggleValue(query.search_conditions.cut[index].clicked,'cut', index)" :value="query.search_conditions.cut[index].description"> 
                        </article>
                    </div>
                </div>
            </div>

            
            
            <button class="button is-info" @click="showAdvance=!showAdvance">{{trans('diamondSearch.More Advance')}}</button>
        


            <div class="tile is-ancestor" v-if="showAdvance" >
                <div class="tile is-12">
                    <div class="tile is-parent">
                        <article class="tile is-child box " >
                            <div>{{trans('diamondSearch.Polish')}}</div>
                            <input v-for="(value, index) in query.search_conditions.polish" class="button " :class=" {'is-info active' : query.search_conditions.polish[index].clicked} " type="button" @click="toggleValue(query.search_conditions.polish[index].clicked,'polish', index)" :value="query.search_conditions.polish[index].description"> 
                        </article>

                        <article class="tile is-child box" >
                            <div>{{trans('diamondSearch.Symmetry')}}</div>
                            <input v-for="(value, index) in query.search_conditions.symmetry " class=" button " :class=" {'is-info active' : query.search_conditions.symmetry[index].clicked} " type="button" @click="toggleValue(query.search_conditions.symmetry[index].clicked,'symmetry', index)" :value="query.search_conditions.symmetry[index].description"> 
                        </article>

                        <article class="tile is-child box" >
                            <div>{{trans('diamondSearch.Fluorescence')}}</div>
                            <input v-for="(value, index) in query.search_conditions.fluorescence " class=" button " :class=" {'is-info active' : query.search_conditions.fluorescence[index].clicked} " type="button" @click="toggleValue(query.search_conditions.fluorescence[index].clicked,'fluorescence', index)" :value="query.search_conditions.fluorescence[index].description"> 
                        </article>
                    </div>
                </div>
            </div>
          

        </section>
        <footer class="modal-card-foot">
          <button class="button is-success">{{trans('diamondSearch.Submit')}}</button>
    <!--       <button class="button">Cancel</button>
     -->    </footer>
      </div>
    </div>
    </div>
    </div>
        </nav>

            <article class="message is-info">
              <div class="message-body">
                <center>
                {{trans('diamondSearch.If you could not find diamonds as your inquiry')}},
                <strong><br>
                {{trans('diamondSearch.PLEASE（Whatsapp: Winnie－5484 4533， for the latest diamond Stock）')}}</strong>
                </center>
              </div>
            </article>
            

            <div class="tabs">
            <table class="table is-striped is-narrowed is-fullwidth ">
                        <thead>
                            <tr class="is-selected ">
                                <th v-for="column in columnsToggle" @click="toggleOrder(column.value)">
                                    <span>@{{ column.display | transJs(langs,locale) }}</span>
                                    <span class="dv-table-column" v-if="column.value === query.column">
                                        <span v-if="query.direction === 'desc' ">&#x25BC;</span>
                                        <span v-else >&#x25B2;</span>
                                    </span>
                                </th>
                            </tr>
                        </thead>

                        <tbody>
                            
                            <tr v-for="(row, index) in model.data" @click="clickRow(row,index)">
                                <td ><img :src="'/front_end/diamond_shapes/' +row.shape+ '.png'" width="20"></td>
                                <td > 
                                    <div v-if="row.imageLink"><i class="fa fa-picture-o" aria-hidden="true"></i></div>
                                    <div v-else></div>
                                </td>
                                <td > $@{{ row.price }}</td>
                                <td > @{{ row.weight }}</td>
                                <td > @{{ row.color }}</td>
                                <td > @{{ row.clarity }}</td>
                                <td > @{{ row.cut }}</td>
                                <td > @{{ row.polish }}</td>
                                <td > @{{ row.symmetry }}</td>
                                <td > @{{ row.fluorescence }}</td>
                                <td > @{{ row.certificate }}</td>
                                <td > @{{ row.lab }}</td>
                            </tr>
                            

                        </tbody>
                

            </table>
            </div>

            <nav class="pagination is-centered" role="navigation" aria-label="pagination">
              <a class="pagination-previous" @click="prev">{{trans('diamondSearch.Previous')}}</a>
              <div class="field">
                 <div class="control">
                    <label>{{trans('diamondSearch.Per Page')}}</label> 
                    <div class="select is-primary">
                        <select v-model="query.per_page" @change="fetchIndexData">
                            <option>10</option>
                            <option>25</option>
                            <option>50</option>
                        </select>
                    </div>
                </div>
            </div>
              <a class="pagination-next" @click="next">{{trans('diamondSearch.Next')}}</a>
              <ul class="pagination-list">
                <li><a class="button" aria-label="Goto page 1" @click="moveTo(-5)" :disabled="model.current_page<5">@{{model.current_page<5 ? 0: model.current_page-5}}</a></li>
                <li><span class="pagination-ellipsis">&hellip;</span></li>
                <li><a class="pagination-link" aria-label="Goto page 86" :diable="model.current_page" @click="moveTo(-1)">@{{model.current_page-1}}</a></li>
                <li><a class="pagination-link is-current" aria-label="Page 46" aria-current="page">@{{model.current_page}}</a></li>
                <li><a class="pagination-link" aria-label="Goto page 86" :diable="model.current_page>model.last_page" @click="moveTo(1)">@{{model.current_page+1}}</a></li>   
                <li><span class="pagination-ellipsis">&hellip;</span></li>
                <li><a class="pagination-link" aria-label="Goto page 86"  @click="moveTo(5)">@{{5+model.current_page}}</a></li>
              </ul>
            </nav>