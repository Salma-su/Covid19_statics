@extends('layouts/statistiques' )


@section('header')
    <div class="logo">
        COVID-19 
        <em> TRACKER </em>
    </div>
    <nav class="nav">
        <ul>
            <a href="/"><span class="navitem">Accueil</a></span>
            <a href="/statistiques" class="active"><span class="navitem">Statistiques</span></a>
            <a href="/nouvelles"><span class="navitem">Nouvelles</span></a>
            <a href="/aproposdenous"><span class="navitem">À propos</span></a>
            <a href="/contact"><span class="navitem">Contact</span></a>

        </ul>
    </nav>
@endsection

@section('banner')
    <div class="banner">
        <span class="banner-filter">
            <div class="banner-text">
                CAS DE LA <em>COVID-19</em>
                <br/>
                <span class="banner-text-line">
                    Suivez la propagation de la COVID-19 à travers le monde .
                </span>
            </div>
        </span>
    </div>
@endsection

@section('barre')

<?php 
    $countries =['Global'=>array('un','un'),'Afghanistan'=>array('afg','af'),'Albania'=>array('alb','al'),'Algeria'=>array('dza','dz'),'Andorra'=>array('and','ad'),'Angola'=>array('ago','ao'),'Anguilla'=>array('aia','ai'),'Antigua and Barbuda'=>array('atg','ag'),'Argentina'=>array('arg','ar'),'Armenia'=>array('arm','am'),'Aruba'=>array('abw','aw'),'Australia'=>array('aus','au'),'Austria'=>array('aut','at'),'Azerbaijan'=>array('aze','az'),'Bahamas'=>array('bhs','bs'),'Bahrain'=>array('bhr','bh'),'Bangladesh'=>array('bgd','bd'),'Barbados'=>array('brb','bb'),'Belarus'=>array('blr','by'),'Belgium'=>array('bel','be'),'Belize'=>array('blz','bz'),'Benin'=>array('ben','bj'),'Bermuda'=>array('bmu','bm'),'Bhutan'=>array('btn','bt'),'Bolivia'=>array('bol','bo'),'Bosnia and Herzegovina'=>array('bih','ba'),'Botswana'=>array('bwa','bw'),'Brazil'=>array('bra','br'),'British Virgin Islands'=>array('vgb','vg'),'Brunei'=>array('brn','bn'),'Bulgaria'=>array('bgr','bg'),'Burkina Faso'=>array('bfa','bf'),'Burundi'=>array('bdi','bi'),'Cabo Verde'=>array('cpv','cv'),'Cambodia'=>array('khm','kh'),'Cameroon'=>array('cmr','cm'),'Canada'=>array('can','ca'),'CAR'=>array('caf','cf'),'Caribbean Netherlands'=>array('bes','bq'),'Cayman Islands'=>array('cym','ky'),'Chad'=>array('tcd','td'),'Channel Islands'=>array('usa','us'),'Chile'=>array('chl','cl'),'China'=>array('chn','cn'),'Colombia'=>array('col','co'),'Comoros'=>array('com','km'),'Congo'=>array('cog','cg'),'Costa Rica'=>array('cri','cr'),'Croatia'=>array('hrv','hr'),'Cuba'=>array('cub','cu'),'Curaçao'=>array('cuw','cw'),'Cyprus'=>array('cyp','cy'),'Czechia'=>array('cze','cz'),'Denmark'=>array('dnk','dk'),'Diamond Princess'=>array('usa','us'),'Djibouti'=>array('dji','dj'),'Dominica'=>array('dma','dm'),'Dominican Republic'=>array('dom','do'),'DRC'=>array('cod','cd'),'Ecuador'=>array('ecu','ec'),'Egypt'=>array('egy','eg'),'El Salvador'=>array('slv','sv'),'Equatorial Guinea'=>array('gnq','gq'),'Eritrea'=>array('eri','er'),'Estonia'=>array('est','ee'),'Eswatini'=>array('swz','sz'),'Ethiopia'=>array('eth','et'),'Faeroe Islands'=>array('fro','fo'),'Falkland Islands'=>array('flk','fk'),'Fiji'=>array('fji','fj'),'Finland'=>array('fin','fi'),'France'=>array('fra','fr'),'French Guiana'=>array('guf','gf'),'French Polynesia'=>array('pyf','pf'),'Gabon'=>array('gab','ga'),'Gambia'=>array('gmb','gm'),'Georgia'=>array('geo','ge'),'Germany'=>array('deu','de'),'Ghana'=>array('gha','gh'),'Gibraltar'=>array('gib','gi'),'Greece'=>array('grc','gr'),'Greenland'=>array('grl','gl'),'Grenada'=>array('grd','gd'),'Guadeloupe'=>array('glp','gp'),'Guatemala'=>array('gtm','gt'),'Guinea'=>array('gin','gn'),'Guinea-Bissau'=>array('gnb','gw'),'Guyana'=>array('guy','gy'),'Haiti'=>array('hti','ht'),'Honduras'=>array('hnd','hn'),'Hong Kong'=>array('hkg','hk'),'Hungary'=>array('hun','hu'),'Iceland'=>array('isl','is'),'India'=>array('ind','in'),'Indonesia'=>array('idn','id'),'Iran'=>array('irn','ir'),'Iraq'=>array('irq','iq'),'Ireland'=>array('irl','ie'),'Isle of Man'=>array('imn','im'),'Israel'=>array('isr','il'),'Italy'=>array('ita','it'),'Ivory Coast'=>array('civ','ci'),'Jamaica'=>array('jam','jm'),'Japan'=>array('jpn','jp'),'Jordan'=>array('jor','jo'),'Kazakhstan'=>array('kaz','kz'),'Kenya'=>array('ken','ke'),'Kuwait'=>array('kwt','kw'),'Kyrgyzstan'=>array('kgz','kg'),'Laos'=>array('lao','la'),'Latvia'=>array('lva','lv'),'Lebanon'=>array('lbn','lb'),'Lesotho'=>array('lso','ls'),'Liberia'=>array('lbr','lr'),'Libya'=>array('lby','ly'),'Liechtenstein'=>array('lie','li'),'Lithuania'=>array('ltu','lt'),'Luxembourg'=>array('lux','lu'),'Macao'=>array('mac','mo'),'Madagascar'=>array('mdg','mg'),'Malawi'=>array('mwi','mw'),'Malaysia'=>array('mys','my'),'Maldives'=>array('mdv','mv'),'Mali'=>array('mli','ml'),'Malta'=>array('mlt','mt'),'Marshall Islands'=>array('mhl','mh'),'Martinique'=>array('mtq','mq'),'Mauritania'=>array('mrt','mr'),'Mauritius'=>array('mus','mu'),'Mayotte'=>array('myt','yt'),'Mexico'=>array('mex','mx'),'Moldova'=>array('mda','md'),'Monaco'=>array('mco','mc'),'Mongolia'=>array('mng','mn'),'Montenegro'=>array('mne','me'),'Montserrat'=>array('msr','ms'),'Morocco'=>array('mar','ma'),'Mozambique'=>array('moz','mz'),'MS Zaandam'=>array('usa','us'),'Myanmar'=>array('mmr','mm'),'Namibia'=>array('nam','na'),'Nepal'=>array('npl','np'),'Netherlands'=>array('nld','nl'),'New Caledonia'=>array('ncl','nc'),'New Zealand'=>array('nzl','nz'),'Nicaragua'=>array('nic','ni'),'Niger'=>array('ner','ne'),'Nigeria'=>array('nga','ng'),'North Macedonia'=>array('mkd','mk'),'Norway'=>array('nor','no'),'Oman'=>array('omn','om'),'Pakistan'=>array('pak','pk'),'Palestine'=>array('pse','ps'),'Panama'=>array('pan','pa'),'Papua New Guinea'=>array('png','pg'),'Paraguay'=>array('pry','py'),'Peru'=>array('per','pe'),'Philippines'=>array('phl','ph'),'Poland'=>array('pol','pl'),'Portugal'=>array('prt','pt'),'Qatar'=>array('qat','qa'),'Réunion'=>array('reu','re'),'Romania'=>array('rou','ro'),'Russia'=>array('rus','ru'),'Rwanda'=>array('rwa','rw'),'Saint Kitts and Nevis'=>array('kna','kn'),'Saint Lucia'=>array('lca','lc'),'Saint Martin'=>array('maf','mf'),'Saint Pierre Miquelon'=>array('spm','pm'),'San Marino'=>array('smr','sm'),'Sao Tome and Principe'=>array('stp','st'),'Saudi Arabia'=>array('sau','sa'),'Senegal'=>array('sen','sn'),'Serbia'=>array('srb','rs'),'Seychelles'=>array('syc','sc'),'Sierra Leone'=>array('sle','sl'),'Singapore'=>array('sgp','sg'),'Sint Maarten'=>array('sxm','sx'),'S. Korea'=>array('kor','kr'),'Slovakia'=>array('svk','sk'),'Slovenia'=>array('svn','si'),'Solomon Islands'=>array('slb','sb'),'Somalia'=>array('som','so'),'South Africa'=>array('zaf','za'),'South Sudan'=>array('ssd','ss'),'Spain'=>array('esp','es'),'Sri Lanka'=>array('lka','lk'),'St. Barth'=>array('blm','bl'),'St. Vincent Grenadines'=>array('vct','vc'),'Sudan'=>array('sdn','sd'),'Suriname'=>array('sur','sr'),'Sweden'=>array('swe','se'),'Switzerland'=>array('che','ch'),'Syria'=>array('syr','sy'),'Taiwan'=>array('twn','tw'),'Tajikistan'=>array('tjk','tj'),'Tanzania'=>array('tza','tz'),'Thailand'=>array('tha','th'),'Timor-Leste'=>array('tls','tl'),'Togo'=>array('tgo','tg'),'Trinidad and Tobago'=>array('tto','tt'),'Tunisia'=>array('tun','tn'),'Turkey'=>array('tur','tr'),'Turks and Caicos'=>array('tca','tc'),'UAE'=>array('are','ae'),'Uganda'=>array('uga','ug'),'UK'=>array('gbr','gb'),'Ukraine'=>array('ukr','ua'),'Uruguay'=>array('ury','uy'),'USA'=>array('usa','us'),'Uzbekistan'=>array('uzb','uz'),'Vanuatu'=>array('vut','vu'),'Vatican City'=>array('vat','va'),'Venezuela'=>array('ven','ve'),'Vietnam'=>array('vnm','vn'),'Wallis and Futuna'=>array('wlf','wf'),'Western Sahara'=>array('esh','eh'),'Yemen'=>array('yem','ye'),'Zambia'=>array('zmb','zm'),'Zimbabwe'=>array('zwe','zw'),];  
    $CurCountry = $_SERVER['REQUEST_URI'];
    
    $CurCountry=explode('/',$CurCountry);
    $CurCountry=end($CurCountry);
    $CurCountry=str_replace("%20"," ",$CurCountry);
    //echo $CurCountry;
    //$CodeCountry=$countries[$CurCountry][1];
    if ($data['TwoLetterSymbol']==null)
    {
        $data['TwoLetterSymbol']='un';
    }
    $CodeCountry = $data['TwoLetterSymbol'];
    //format rank string
    $rank = $data['rank'];
    if ($rank==1) $rank=$rank.'st';
    else if ($rank==2) $rank=$rank.'ns';
    else if ($rank==3) $rank=$rank.'rd';
    else if ($rank>3) $rank=$rank.'th';
    ?>

<div class="stat-global">
    <div class="box" name="country">

        <div class="boxTop" id='firstbox'>

            <div class="countryname">
                <img class="flag"
                    src="https://flagcdn.com/h40/{{$CodeCountry}}.png"
                    srcset="https://flagcdn.com/h80/{{$CodeCountry}}.png 2x,
                        https://flagcdn.com/h120/{{$CodeCountry}}.png 3x"
                        height="30"
                >
                <br/>{{$CurCountry}}
            </div>

            <span class="rank">
                <span style="color:black;">Rang :</span> {{$rank}}
            </span>

        </div>

        <div class="boxBot" >
            <form action="">


                    <input list="ListCountry" class="countryCombo" id="countryCombo" placeholder="{{$CurCountry}}" onchange="OnSelectionChangeBarre()"/>
                    <datalist id="ListCountry">
                        <option value={{$MyCountry}}>My Country</option>
                        @foreach ( $countries as $key=>$value)
                            @if ($key==$CurCountry)
                                <option value="{{$key}}" selected>{{$key}}</option>
                            @else 
                                <option value="{{$key}}">{{$key}}</option>
                            @endif
                        @endforeach
                    </datalist>
                
            </form>
        </div>
    </div>
    <div class="box" id="confirmed">
        <div class="boxTop" id="boxTopConfirmed">
            
            <div class="big">
                <?php echo number_format($data['TotalCases']) ?> 
                
            </div>
            <div class="small">
                +<?php echo number_format($data['NewCases']) ?>
            </div>

        </div>
        <div class="boxBot" id="boxBotConfirmed">
            Confirmés
        </div>
    </div>
    <div class="box" id="recovered">
        <div class="boxTop" id="boxTopRecovered">
            <div class="big">
                <?php echo number_format($data['TotalRecovered']) ?> 
            </div>
            <div class="small">
                +<?php echo number_format($data['NewRecovered']) ?> 

            </div>
        </div>
        <div class="boxBot" id="boxBotRecovered">
            Rétablis
        </div>
    </div>
    <div class="box" id="death">
        <div class="boxTop" id="boxTopDeath">
            <div class="big">
                <?php echo number_format($data['TotalDeaths']) ?> 

            </div>
            <div class="small">
                +<?php echo number_format($data['NewDeaths']) ?> 

            </div>
        </div>
        <div class="boxBot" id="boxBotDeath">
            Décès
        </div>
    </div>
    <div class="box" id="active">
        <div class="boxTop" id="boxTopActive">
            <div class="big">
                <?php echo number_format($data['ActiveCases']) ?> 

            </div>
            <div class="small">
                
            </div>
        </div>
        <div class="boxBot" id="boxBotActive">
            Actifs
        </div>  
    </div>
</div>  

<script src="{{asset('/frontend/js/barre.js')}}" ></script>

@endsection


@section('graph1')

    <div class="graph1">  
        <div class="form-select">
            <form action="" id="form">
                <select id="type"  onchange="OnSelectionChangeGraph()">

                                <option class="myoption" value="0" selected>Nouveaux cas</option>
                                <option class="myoption" value="1" >Nouveaux guérisons</option>
                                <option class="myoption" value="2" >Nouveaux décès</option>

                </select>
            </form>
        </div>

        <canvas id="myChart1" width="600" height="420"></canvas>
        <script src="{{asset('/frontend/js/graph.js')}}" data={{json_encode($StatArray)}}></script>

    </div>
    
@endsection


@section('graph2')
<div class="graph2">
        
    <canvas id="myChart2" width="600" height="454"></canvas>
    <script src="{{asset('/frontend/js/graph2.js')}}" data={{json_encode($StatArray)}}></script>

</div>
@endsection



@section('table')
<div class="table-div">
    
    <table class="table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Pays</th>
                <th>Nombre total de cas</th>
                <th>Nouveaux cas</th>
                <th>Nombre total de décès</th>
                <th>Nouveaux décès</th>
                <th>Nombre total de guérison</th>
                <th>Nouveaux guérisons</th>
                <th>Cas actif</th>
                <th>Cas critique</th>
            </tr>
        </thead>

        <tbody>
            <?php
                $count = 1;
            ?>
            @foreach($json as $countries)
                
                <tr>
                    <td  class="ranking_table">{{$count}}</td>
                    
                    <td class='country_table'><a href="/statistiques/{{$countries->Country}}"> {{$countries->Country}} </a></td>
                    
                    <td> {{number_format ($countries->TotalCases)}} </td>
                    
                    @if ($countries->NewCases >0)
                        <td style="background-color:#FFEEAA;">
                            +{{number_format($countries->NewCases)}}
                        </td> 
                    @else 
                        <td></td>   
                    @endif
                    
                    <td> {{number_format($countries->TotalDeaths)}} </td>

                    @if ($countries->NewDeaths >0)
                        <td style="background-color:red;color:white">
                            +{{number_format($countries->NewDeaths)}}
                        </td>    
                    @else 
                        <td></td>
                    @endif

                    <td> {{number_format($countries->TotalRecovered)}} </td>

                    @if ($countries->NewRecovered >0)
                        <td style="background-color:#c8e6c9;">
                            +{{number_format($countries->NewRecovered)}}
                        </td>
                    @else 
                        <td></td>
                    @endif

                    <td> {{number_format($countries->ActiveCases)}} </td>
                    <td> {{number_format($countries->Serious_Critical)}} </td>

                </tr>
                <?php
                    $count+=1;
                ?>            
            @endforeach
        </tbody>
    </table>
</div>
    
@endsection

@section('news')
<div class="table_title">
    @if ($checknews =="global")
    Les Nouvelles du covid au monde 
    @else
        Les Nouvelles de la santé  {{$CurCountry}} 
    @endif
</div>
<div class="BigNews">
<div id="contenu">

        <?php $NewsCounter=0;
            $MaxNews = 10;
        ?>
        @foreach ($newsdata as $news )

            <?php 
                if ($NewsCounter==$MaxNews)
                    break;
            $NewsCounter++;?>
            <a class='ahref' target="_blank" href="{{ $news['url'] }}">
                <div class="news">
                    <div class="img">
                        <img class="imagNews" src="{{$news['urlToImage']}}" alt="NewsImage">
                    </div> 
                    <div class="reste">
                        <span class="NewsTitle" >{{$news['title']}}   </span>
                        <br/>
                        <span class="description"> {{ $news['description'] }} </span>
                    </div>
                </div>
            </a>
            <br/>
            <hr/>
            <br/>    

        @endforeach




</div>
</div>
@endsection


@section('footer')
    <div class="footer">
        Copyright © 2021 Covid-19 - par une équipe de: <a href="ensah.ma">Ensah.ma</a>
    </div>
@endsection


