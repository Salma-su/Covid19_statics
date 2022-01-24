<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\Http;
use Illuminate\Support\Facades\Route;
use App\Models\api;

use function PHPUnit\Framework\isEmpty;

class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    ////////////////////Location/////////////////////
    public function getLocation()
    {
        $ip = $_SERVER['REMOTE_ADDR'];
        $ip = '83.56.131.20'; //spain
        //$ip = '41.143.104.26'; //morocco
        $a=(unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$ip))['geoplugin_countryName' ]);
        return $a;
    }
    
    /////////////////////news///////////////////////////////////
    public function newsapi($country)
        {
        $countries =['Global'=>array('glb','gl'),'Afghanistan'=>array('afg','af'),'Albania'=>array('alb','al'),'Algeria'=>array('dza','dz'),'Andorra'=>array('and','ad'),'Angola'=>array('ago','ao'),'Anguilla'=>array('aia','ai'),'Antigua and Barbuda'=>array('atg','ag'),'Argentina'=>array('arg','ar'),'Armenia'=>array('arm','am'),'Aruba'=>array('abw','aw'),'Australia'=>array('aus','au'),'Austria'=>array('aut','at'),'Azerbaijan'=>array('aze','az'),'Bahamas'=>array('bhs','bs'),'Bahrain'=>array('bhr','bh'),'Bangladesh'=>array('bgd','bd'),'Barbados'=>array('brb','bb'),'Belarus'=>array('blr','by'),'Belgium'=>array('bel','be'),'Belize'=>array('blz','bz'),'Benin'=>array('ben','bj'),'Bermuda'=>array('bmu','bm'),'Bhutan'=>array('btn','bt'),'Bolivia'=>array('bol','bo'),'Bosnia and Herzegovina'=>array('bih','ba'),'Botswana'=>array('bwa','bw'),'Brazil'=>array('bra','br'),'British Virgin Islands'=>array('vgb','vg'),'Brunei'=>array('brn','bn'),'Bulgaria'=>array('bgr','bg'),'Burkina Faso'=>array('bfa','bf'),'Burundi'=>array('bdi','bi'),'Cabo Verde'=>array('cpv','cv'),'Cambodia'=>array('khm','kh'),'Cameroon'=>array('cmr','cm'),'Canada'=>array('can','ca'),'CAR'=>array('caf','cf'),'Caribbean Netherlands'=>array('bes','bq'),'Cayman Islands'=>array('cym','ky'),'Chad'=>array('tcd','td'),'Channel Islands'=>array('usa','us'),'Chile'=>array('chl','cl'),'China'=>array('chn','cn'),'Colombia'=>array('col','co'),'Comoros'=>array('com','km'),'Congo'=>array('cog','cg'),'Costa Rica'=>array('cri','cr'),'Croatia'=>array('hrv','hr'),'Cuba'=>array('cub','cu'),'Curaçao'=>array('cuw','cw'),'Cyprus'=>array('cyp','cy'),'Czechia'=>array('cze','cz'),'Denmark'=>array('dnk','dk'),'Diamond Princess'=>array('usa','us'),'Djibouti'=>array('dji','dj'),'Dominica'=>array('dma','dm'),'Dominican Republic'=>array('dom','do'),'DRC'=>array('cod','cd'),'Ecuador'=>array('ecu','ec'),'Egypt'=>array('egy','eg'),'El Salvador'=>array('slv','sv'),'Equatorial Guinea'=>array('gnq','gq'),'Eritrea'=>array('eri','er'),'Estonia'=>array('est','ee'),'Eswatini'=>array('swz','sz'),'Ethiopia'=>array('eth','et'),'Faeroe Islands'=>array('fro','fo'),'Falkland Islands'=>array('flk','fk'),'Fiji'=>array('fji','fj'),'Finland'=>array('fin','fi'),'France'=>array('fra','fr'),'French Guiana'=>array('guf','gf'),'French Polynesia'=>array('pyf','pf'),'Gabon'=>array('gab','ga'),'Gambia'=>array('gmb','gm'),'Georgia'=>array('geo','ge'),'Germany'=>array('deu','de'),'Ghana'=>array('gha','gh'),'Gibraltar'=>array('gib','gi'),'Greece'=>array('grc','gr'),'Greenland'=>array('grl','gl'),'Grenada'=>array('grd','gd'),'Guadeloupe'=>array('glp','gp'),'Guatemala'=>array('gtm','gt'),'Guinea'=>array('gin','gn'),'Guinea-Bissau'=>array('gnb','gw'),'Guyana'=>array('guy','gy'),'Haiti'=>array('hti','ht'),'Honduras'=>array('hnd','hn'),'Hong Kong'=>array('hkg','hk'),'Hungary'=>array('hun','hu'),'Iceland'=>array('isl','is'),'India'=>array('ind','in'),'Indonesia'=>array('idn','id'),'Iran'=>array('irn','ir'),'Iraq'=>array('irq','iq'),'Ireland'=>array('irl','ie'),'Isle of Man'=>array('imn','im'),'Israel'=>array('isr','il'),'Italy'=>array('ita','it'),'Ivory Coast'=>array('civ','ci'),'Jamaica'=>array('jam','jm'),'Japan'=>array('jpn','jp'),'Jordan'=>array('jor','jo'),'Kazakhstan'=>array('kaz','kz'),'Kenya'=>array('ken','ke'),'Kuwait'=>array('kwt','kw'),'Kyrgyzstan'=>array('kgz','kg'),'Laos'=>array('lao','la'),'Latvia'=>array('lva','lv'),'Lebanon'=>array('lbn','lb'),'Lesotho'=>array('lso','ls'),'Liberia'=>array('lbr','lr'),'Libya'=>array('lby','ly'),'Liechtenstein'=>array('lie','li'),'Lithuania'=>array('ltu','lt'),'Luxembourg'=>array('lux','lu'),'Macao'=>array('mac','mo'),'Madagascar'=>array('mdg','mg'),'Malawi'=>array('mwi','mw'),'Malaysia'=>array('mys','my'),'Maldives'=>array('mdv','mv'),'Mali'=>array('mli','ml'),'Malta'=>array('mlt','mt'),'Marshall Islands'=>array('mhl','mh'),'Martinique'=>array('mtq','mq'),'Mauritania'=>array('mrt','mr'),'Mauritius'=>array('mus','mu'),'Mayotte'=>array('myt','yt'),'Mexico'=>array('mex','mx'),'Moldova'=>array('mda','md'),'Monaco'=>array('mco','mc'),'Mongolia'=>array('mng','mn'),'Montenegro'=>array('mne','me'),'Montserrat'=>array('msr','ms'),'Morocco'=>array('mar','ma'),'Mozambique'=>array('moz','mz'),'MS Zaandam'=>array('usa','us'),'Myanmar'=>array('mmr','mm'),'Namibia'=>array('nam','na'),'Nepal'=>array('npl','np'),'Netherlands'=>array('nld','nl'),'New Caledonia'=>array('ncl','nc'),'New Zealand'=>array('nzl','nz'),'Nicaragua'=>array('nic','ni'),'Niger'=>array('ner','ne'),'Nigeria'=>array('nga','ng'),'North Macedonia'=>array('mkd','mk'),'Norway'=>array('nor','no'),'Oman'=>array('omn','om'),'Pakistan'=>array('pak','pk'),'Palestine'=>array('pse','ps'),'Panama'=>array('pan','pa'),'Papua New Guinea'=>array('png','pg'),'Paraguay'=>array('pry','py'),'Peru'=>array('per','pe'),'Philippines'=>array('phl','ph'),'Poland'=>array('pol','pl'),'Portugal'=>array('prt','pt'),'Qatar'=>array('qat','qa'),'Réunion'=>array('reu','re'),'Romania'=>array('rou','ro'),'Russia'=>array('rus','ru'),'Rwanda'=>array('rwa','rw'),'Saint Kitts and Nevis'=>array('kna','kn'),'Saint Lucia'=>array('lca','lc'),'Saint Martin'=>array('maf','mf'),'Saint Pierre Miquelon'=>array('spm','pm'),'San Marino'=>array('smr','sm'),'Sao Tome and Principe'=>array('stp','st'),'Saudi Arabia'=>array('sau','sa'),'Senegal'=>array('sen','sn'),'Serbia'=>array('srb','rs'),'Seychelles'=>array('syc','sc'),'Sierra Leone'=>array('sle','sl'),'Singapore'=>array('sgp','sg'),'Sint Maarten'=>array('sxm','sx'),'S. Korea'=>array('kor','kr'),'Slovakia'=>array('svk','sk'),'Slovenia'=>array('svn','si'),'Solomon Islands'=>array('slb','sb'),'Somalia'=>array('som','so'),'South Africa'=>array('zaf','za'),'South Sudan'=>array('ssd','ss'),'Spain'=>array('esp','es'),'Sri Lanka'=>array('lka','lk'),'St. Barth'=>array('blm','bl'),'St. Vincent Grenadines'=>array('vct','vc'),'Sudan'=>array('sdn','sd'),'Suriname'=>array('sur','sr'),'Sweden'=>array('swe','se'),'Switzerland'=>array('che','ch'),'Syria'=>array('syr','sy'),'Taiwan'=>array('twn','tw'),'Tajikistan'=>array('tjk','tj'),'Tanzania'=>array('tza','tz'),'Thailand'=>array('tha','th'),'Timor-Leste'=>array('tls','tl'),'Togo'=>array('tgo','tg'),'Trinidad and Tobago'=>array('tto','tt'),'Tunisia'=>array('tun','tn'),'Turkey'=>array('tur','tr'),'Turks and Caicos'=>array('tca','tc'),'UAE'=>array('are','ae'),'Uganda'=>array('uga','ug'),'UK'=>array('gbr','gb'),'Ukraine'=>array('ukr','ua'),'Uruguay'=>array('ury','uy'),'USA'=>array('usa','us'),'Uzbekistan'=>array('uzb','uz'),'Vanuatu'=>array('vut','vu'),'Vatican City'=>array('vat','va'),'Venezuela'=>array('ven','ve'),'Vietnam'=>array('vnm','vn'),'Wallis and Futuna'=>array('wlf','wf'),'Western Sahara'=>array('esh','eh'),'Yemen'=>array('yem','ye'),'Zambia'=>array('zmb','zm'),'Zimbabwe'=>array('zwe','zw'),];  

        $liste =  array('ae','ar','at','au','be','bg',
        'br','ca','ch','cn','co','cu','cz','de','eg','fr','gb','gr','hk','hu','id','ie','il',
        'in','it','jp','kr','lt','lv','ma','mx','my','ng','nl','no','nz','ph','pl','pt','ro',
        'rs','ru','sa','se','sg','si','sk','th','tr','tw','ua','us','ve','za');

        $api = new api;
        $iso2 = $countries[$country][1];
        if (in_array($iso2,$liste)){
            $data= array($api->getNews($iso2),"country");
        }
        else {
            $data= array($api->getAllNewsCovid(),"global");
        }
        
        return $data;
        
        }
    ////////////////////////////////////////////////////////////


    ///////////////////////barre data//////////////////////////
    public function getBarre($country)
    {
        $countries =['Global'=>array('glb','gl'),'Afghanistan'=>array('afg','af'),'Albania'=>array('alb','al'),'Algeria'=>array('dza','dz'),'Andorra'=>array('and','ad'),'Angola'=>array('ago','ao'),'Anguilla'=>array('aia','ai'),'Antigua and Barbuda'=>array('atg','ag'),'Argentina'=>array('arg','ar'),'Armenia'=>array('arm','am'),'Aruba'=>array('abw','aw'),'Australia'=>array('aus','au'),'Austria'=>array('aut','at'),'Azerbaijan'=>array('aze','az'),'Bahamas'=>array('bhs','bs'),'Bahrain'=>array('bhr','bh'),'Bangladesh'=>array('bgd','bd'),'Barbados'=>array('brb','bb'),'Belarus'=>array('blr','by'),'Belgium'=>array('bel','be'),'Belize'=>array('blz','bz'),'Benin'=>array('ben','bj'),'Bermuda'=>array('bmu','bm'),'Bhutan'=>array('btn','bt'),'Bolivia'=>array('bol','bo'),'Bosnia and Herzegovina'=>array('bih','ba'),'Botswana'=>array('bwa','bw'),'Brazil'=>array('bra','br'),'British Virgin Islands'=>array('vgb','vg'),'Brunei'=>array('brn','bn'),'Bulgaria'=>array('bgr','bg'),'Burkina Faso'=>array('bfa','bf'),'Burundi'=>array('bdi','bi'),'Cabo Verde'=>array('cpv','cv'),'Cambodia'=>array('khm','kh'),'Cameroon'=>array('cmr','cm'),'Canada'=>array('can','ca'),'CAR'=>array('caf','cf'),'Caribbean Netherlands'=>array('bes','bq'),'Cayman Islands'=>array('cym','ky'),'Chad'=>array('tcd','td'),'Channel Islands'=>array('usa','us'),'Chile'=>array('chl','cl'),'China'=>array('chn','cn'),'Colombia'=>array('col','co'),'Comoros'=>array('com','km'),'Congo'=>array('cog','cg'),'Costa Rica'=>array('cri','cr'),'Croatia'=>array('hrv','hr'),'Cuba'=>array('cub','cu'),'Curaçao'=>array('cuw','cw'),'Cyprus'=>array('cyp','cy'),'Czechia'=>array('cze','cz'),'Denmark'=>array('dnk','dk'),'Diamond Princess'=>array('usa','us'),'Djibouti'=>array('dji','dj'),'Dominica'=>array('dma','dm'),'Dominican Republic'=>array('dom','do'),'DRC'=>array('cod','cd'),'Ecuador'=>array('ecu','ec'),'Egypt'=>array('egy','eg'),'El Salvador'=>array('slv','sv'),'Equatorial Guinea'=>array('gnq','gq'),'Eritrea'=>array('eri','er'),'Estonia'=>array('est','ee'),'Eswatini'=>array('swz','sz'),'Ethiopia'=>array('eth','et'),'Faeroe Islands'=>array('fro','fo'),'Falkland Islands'=>array('flk','fk'),'Fiji'=>array('fji','fj'),'Finland'=>array('fin','fi'),'France'=>array('fra','fr'),'French Guiana'=>array('guf','gf'),'French Polynesia'=>array('pyf','pf'),'Gabon'=>array('gab','ga'),'Gambia'=>array('gmb','gm'),'Georgia'=>array('geo','ge'),'Germany'=>array('deu','de'),'Ghana'=>array('gha','gh'),'Gibraltar'=>array('gib','gi'),'Greece'=>array('grc','gr'),'Greenland'=>array('grl','gl'),'Grenada'=>array('grd','gd'),'Guadeloupe'=>array('glp','gp'),'Guatemala'=>array('gtm','gt'),'Guinea'=>array('gin','gn'),'Guinea-Bissau'=>array('gnb','gw'),'Guyana'=>array('guy','gy'),'Haiti'=>array('hti','ht'),'Honduras'=>array('hnd','hn'),'Hong Kong'=>array('hkg','hk'),'Hungary'=>array('hun','hu'),'Iceland'=>array('isl','is'),'India'=>array('ind','in'),'Indonesia'=>array('idn','id'),'Iran'=>array('irn','ir'),'Iraq'=>array('irq','iq'),'Ireland'=>array('irl','ie'),'Isle of Man'=>array('imn','im'),'Israel'=>array('isr','il'),'Italy'=>array('ita','it'),'Ivory Coast'=>array('civ','ci'),'Jamaica'=>array('jam','jm'),'Japan'=>array('jpn','jp'),'Jordan'=>array('jor','jo'),'Kazakhstan'=>array('kaz','kz'),'Kenya'=>array('ken','ke'),'Kuwait'=>array('kwt','kw'),'Kyrgyzstan'=>array('kgz','kg'),'Laos'=>array('lao','la'),'Latvia'=>array('lva','lv'),'Lebanon'=>array('lbn','lb'),'Lesotho'=>array('lso','ls'),'Liberia'=>array('lbr','lr'),'Libya'=>array('lby','ly'),'Liechtenstein'=>array('lie','li'),'Lithuania'=>array('ltu','lt'),'Luxembourg'=>array('lux','lu'),'Macao'=>array('mac','mo'),'Madagascar'=>array('mdg','mg'),'Malawi'=>array('mwi','mw'),'Malaysia'=>array('mys','my'),'Maldives'=>array('mdv','mv'),'Mali'=>array('mli','ml'),'Malta'=>array('mlt','mt'),'Marshall Islands'=>array('mhl','mh'),'Martinique'=>array('mtq','mq'),'Mauritania'=>array('mrt','mr'),'Mauritius'=>array('mus','mu'),'Mayotte'=>array('myt','yt'),'Mexico'=>array('mex','mx'),'Moldova'=>array('mda','md'),'Monaco'=>array('mco','mc'),'Mongolia'=>array('mng','mn'),'Montenegro'=>array('mne','me'),'Montserrat'=>array('msr','ms'),'Morocco'=>array('mar','ma'),'Mozambique'=>array('moz','mz'),'MS Zaandam'=>array('usa','us'),'Myanmar'=>array('mmr','mm'),'Namibia'=>array('nam','na'),'Nepal'=>array('npl','np'),'Netherlands'=>array('nld','nl'),'New Caledonia'=>array('ncl','nc'),'New Zealand'=>array('nzl','nz'),'Nicaragua'=>array('nic','ni'),'Niger'=>array('ner','ne'),'Nigeria'=>array('nga','ng'),'North Macedonia'=>array('mkd','mk'),'Norway'=>array('nor','no'),'Oman'=>array('omn','om'),'Pakistan'=>array('pak','pk'),'Palestine'=>array('pse','ps'),'Panama'=>array('pan','pa'),'Papua New Guinea'=>array('png','pg'),'Paraguay'=>array('pry','py'),'Peru'=>array('per','pe'),'Philippines'=>array('phl','ph'),'Poland'=>array('pol','pl'),'Portugal'=>array('prt','pt'),'Qatar'=>array('qat','qa'),'Réunion'=>array('reu','re'),'Romania'=>array('rou','ro'),'Russia'=>array('rus','ru'),'Rwanda'=>array('rwa','rw'),'Saint Kitts and Nevis'=>array('kna','kn'),'Saint Lucia'=>array('lca','lc'),'Saint Martin'=>array('maf','mf'),'Saint Pierre Miquelon'=>array('spm','pm'),'San Marino'=>array('smr','sm'),'Sao Tome and Principe'=>array('stp','st'),'Saudi Arabia'=>array('sau','sa'),'Senegal'=>array('sen','sn'),'Serbia'=>array('srb','rs'),'Seychelles'=>array('syc','sc'),'Sierra Leone'=>array('sle','sl'),'Singapore'=>array('sgp','sg'),'Sint Maarten'=>array('sxm','sx'),'S. Korea'=>array('kor','kr'),'Slovakia'=>array('svk','sk'),'Slovenia'=>array('svn','si'),'Solomon Islands'=>array('slb','sb'),'Somalia'=>array('som','so'),'South Africa'=>array('zaf','za'),'South Sudan'=>array('ssd','ss'),'Spain'=>array('esp','es'),'Sri Lanka'=>array('lka','lk'),'St. Barth'=>array('blm','bl'),'St. Vincent Grenadines'=>array('vct','vc'),'Sudan'=>array('sdn','sd'),'Suriname'=>array('sur','sr'),'Sweden'=>array('swe','se'),'Switzerland'=>array('che','ch'),'Syria'=>array('syr','sy'),'Taiwan'=>array('twn','tw'),'Tajikistan'=>array('tjk','tj'),'Tanzania'=>array('tza','tz'),'Thailand'=>array('tha','th'),'Timor-Leste'=>array('tls','tl'),'Togo'=>array('tgo','tg'),'Trinidad and Tobago'=>array('tto','tt'),'Tunisia'=>array('tun','tn'),'Turkey'=>array('tur','tr'),'Turks and Caicos'=>array('tca','tc'),'UAE'=>array('are','ae'),'Uganda'=>array('uga','ug'),'UK'=>array('gbr','gb'),'Ukraine'=>array('ukr','ua'),'Uruguay'=>array('ury','uy'),'USA'=>array('usa','us'),'Uzbekistan'=>array('uzb','uz'),'Vanuatu'=>array('vut','vu'),'Vatican City'=>array('vat','va'),'Venezuela'=>array('ven','ve'),'Vietnam'=>array('vnm','vn'),'Wallis and Futuna'=>array('wlf','wf'),'Western Sahara'=>array('esh','eh'),'Yemen'=>array('yem','ye'),'Zambia'=>array('zmb','zm'),'Zimbabwe'=>array('zwe','zw'),];  

        if ($country=='Global'){ //gobal case
            $url="https://vaccovid-coronavirus-vaccine-and-treatment-tracker.p.rapidapi.com/api/npm-covid-data/world";
        }else{
            $iso3=$countries[$country][0];
            $country = str_replace(" ","%20",$country);
            $url = 'https://vaccovid-coronavirus-vaccine-and-treatment-tracker.p.rapidapi.com/api/npm-covid-data/country-report-iso-based/'.$country.'/'.$iso3;
        }
        //echo $url;
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "Content-type: application/json","x-rapidapi-host: vaccovid-coronavirus-vaccine-and-treatment-tracker.p.rapidapi.com",
                "x-rapidapi-key: 754b4ec983msh93a8a4e46cb7d39p13a009jsn0724ba6ba490"
            ],
        ]);
        
        $response = curl_exec($curl);
        $err = curl_error($curl);
        $ss =json_decode($response);
        $ss=$ss[0];
        $array = json_decode(json_encode($ss), true);

        curl_close($curl);

        if ($err) { 
            echo "cURL Error #:" . $err;
        } else {

        }
        return $array;
        
    }
    //////////////////////////////////////////////////////

    ////////////////////statistique data//////////////////
    public function StatData($country){
        $countries =['Global'=>array('',''),'Afghanistan'=>array('afg','af'),'Albania'=>array('alb','al'),'Algeria'=>array('dza','dz'),'Andorra'=>array('and','ad'),'Angola'=>array('ago','ao'),'Anguilla'=>array('aia','ai'),'Antigua and Barbuda'=>array('atg','ag'),'Argentina'=>array('arg','ar'),'Armenia'=>array('arm','am'),'Aruba'=>array('abw','aw'),'Australia'=>array('aus','au'),'Austria'=>array('aut','at'),'Azerbaijan'=>array('aze','az'),'Bahamas'=>array('bhs','bs'),'Bahrain'=>array('bhr','bh'),'Bangladesh'=>array('bgd','bd'),'Barbados'=>array('brb','bb'),'Belarus'=>array('blr','by'),'Belgium'=>array('bel','be'),'Belize'=>array('blz','bz'),'Benin'=>array('ben','bj'),'Bermuda'=>array('bmu','bm'),'Bhutan'=>array('btn','bt'),'Bolivia'=>array('bol','bo'),'Bosnia and Herzegovina'=>array('bih','ba'),'Botswana'=>array('bwa','bw'),'Brazil'=>array('bra','br'),'British Virgin Islands'=>array('vgb','vg'),'Brunei'=>array('brn','bn'),'Bulgaria'=>array('bgr','bg'),'Burkina Faso'=>array('bfa','bf'),'Burundi'=>array('bdi','bi'),'Cabo Verde'=>array('cpv','cv'),'Cambodia'=>array('khm','kh'),'Cameroon'=>array('cmr','cm'),'Canada'=>array('can','ca'),'CAR'=>array('caf','cf'),'Caribbean Netherlands'=>array('bes','bq'),'Cayman Islands'=>array('cym','ky'),'Chad'=>array('tcd','td'),'Channel Islands'=>array('usa','us'),'Chile'=>array('chl','cl'),'China'=>array('chn','cn'),'Colombia'=>array('col','co'),'Comoros'=>array('com','km'),'Congo'=>array('cog','cg'),'Costa Rica'=>array('cri','cr'),'Croatia'=>array('hrv','hr'),'Cuba'=>array('cub','cu'),'Curaçao'=>array('cuw','cw'),'Cyprus'=>array('cyp','cy'),'Czechia'=>array('cze','cz'),'Denmark'=>array('dnk','dk'),'Diamond Princess'=>array('usa','us'),'Djibouti'=>array('dji','dj'),'Dominica'=>array('dma','dm'),'Dominican Republic'=>array('dom','do'),'DRC'=>array('cod','cd'),'Ecuador'=>array('ecu','ec'),'Egypt'=>array('egy','eg'),'El Salvador'=>array('slv','sv'),'Equatorial Guinea'=>array('gnq','gq'),'Eritrea'=>array('eri','er'),'Estonia'=>array('est','ee'),'Eswatini'=>array('swz','sz'),'Ethiopia'=>array('eth','et'),'Faeroe Islands'=>array('fro','fo'),'Falkland Islands'=>array('flk','fk'),'Fiji'=>array('fji','fj'),'Finland'=>array('fin','fi'),'France'=>array('fra','fr'),'French Guiana'=>array('guf','gf'),'French Polynesia'=>array('pyf','pf'),'Gabon'=>array('gab','ga'),'Gambia'=>array('gmb','gm'),'Georgia'=>array('geo','ge'),'Germany'=>array('deu','de'),'Ghana'=>array('gha','gh'),'Gibraltar'=>array('gib','gi'),'Greece'=>array('grc','gr'),'Greenland'=>array('grl','gl'),'Grenada'=>array('grd','gd'),'Guadeloupe'=>array('glp','gp'),'Guatemala'=>array('gtm','gt'),'Guinea'=>array('gin','gn'),'Guinea-Bissau'=>array('gnb','gw'),'Guyana'=>array('guy','gy'),'Haiti'=>array('hti','ht'),'Honduras'=>array('hnd','hn'),'Hong Kong'=>array('hkg','hk'),'Hungary'=>array('hun','hu'),'Iceland'=>array('isl','is'),'India'=>array('ind','in'),'Indonesia'=>array('idn','id'),'Iran'=>array('irn','ir'),'Iraq'=>array('irq','iq'),'Ireland'=>array('irl','ie'),'Isle of Man'=>array('imn','im'),'Israel'=>array('isr','il'),'Italy'=>array('ita','it'),'Ivory Coast'=>array('civ','ci'),'Jamaica'=>array('jam','jm'),'Japan'=>array('jpn','jp'),'Jordan'=>array('jor','jo'),'Kazakhstan'=>array('kaz','kz'),'Kenya'=>array('ken','ke'),'Kuwait'=>array('kwt','kw'),'Kyrgyzstan'=>array('kgz','kg'),'Laos'=>array('lao','la'),'Latvia'=>array('lva','lv'),'Lebanon'=>array('lbn','lb'),'Lesotho'=>array('lso','ls'),'Liberia'=>array('lbr','lr'),'Libya'=>array('lby','ly'),'Liechtenstein'=>array('lie','li'),'Lithuania'=>array('ltu','lt'),'Luxembourg'=>array('lux','lu'),'Macao'=>array('mac','mo'),'Madagascar'=>array('mdg','mg'),'Malawi'=>array('mwi','mw'),'Malaysia'=>array('mys','my'),'Maldives'=>array('mdv','mv'),'Mali'=>array('mli','ml'),'Malta'=>array('mlt','mt'),'Marshall Islands'=>array('mhl','mh'),'Martinique'=>array('mtq','mq'),'Mauritania'=>array('mrt','mr'),'Mauritius'=>array('mus','mu'),'Mayotte'=>array('myt','yt'),'Mexico'=>array('mex','mx'),'Moldova'=>array('mda','md'),'Monaco'=>array('mco','mc'),'Mongolia'=>array('mng','mn'),'Montenegro'=>array('mne','me'),'Montserrat'=>array('msr','ms'),'Morocco'=>array('mar','ma'),'Mozambique'=>array('moz','mz'),'MS Zaandam'=>array('usa','us'),'Myanmar'=>array('mmr','mm'),'Namibia'=>array('nam','na'),'Nepal'=>array('npl','np'),'Netherlands'=>array('nld','nl'),'New Caledonia'=>array('ncl','nc'),'New Zealand'=>array('nzl','nz'),'Nicaragua'=>array('nic','ni'),'Niger'=>array('ner','ne'),'Nigeria'=>array('nga','ng'),'North Macedonia'=>array('mkd','mk'),'Norway'=>array('nor','no'),'Oman'=>array('omn','om'),'Pakistan'=>array('pak','pk'),'Palestine'=>array('pse','ps'),'Panama'=>array('pan','pa'),'Papua New Guinea'=>array('png','pg'),'Paraguay'=>array('pry','py'),'Peru'=>array('per','pe'),'Philippines'=>array('phl','ph'),'Poland'=>array('pol','pl'),'Portugal'=>array('prt','pt'),'Qatar'=>array('qat','qa'),'Réunion'=>array('reu','re'),'Romania'=>array('rou','ro'),'Russia'=>array('rus','ru'),'Rwanda'=>array('rwa','rw'),'Saint Kitts and Nevis'=>array('kna','kn'),'Saint Lucia'=>array('lca','lc'),'Saint Martin'=>array('maf','mf'),'Saint Pierre Miquelon'=>array('spm','pm'),'San Marino'=>array('smr','sm'),'Sao Tome and Principe'=>array('stp','st'),'Saudi Arabia'=>array('sau','sa'),'Senegal'=>array('sen','sn'),'Serbia'=>array('srb','rs'),'Seychelles'=>array('syc','sc'),'Sierra Leone'=>array('sle','sl'),'Singapore'=>array('sgp','sg'),'Sint Maarten'=>array('sxm','sx'),'S. Korea'=>array('kor','kr'),'Slovakia'=>array('svk','sk'),'Slovenia'=>array('svn','si'),'Solomon Islands'=>array('slb','sb'),'Somalia'=>array('som','so'),'South Africa'=>array('zaf','za'),'South Sudan'=>array('ssd','ss'),'Spain'=>array('esp','es'),'Sri Lanka'=>array('lka','lk'),'St. Barth'=>array('blm','bl'),'St. Vincent Grenadines'=>array('vct','vc'),'Sudan'=>array('sdn','sd'),'Suriname'=>array('sur','sr'),'Sweden'=>array('swe','se'),'Switzerland'=>array('che','ch'),'Syria'=>array('syr','sy'),'Taiwan'=>array('twn','tw'),'Tajikistan'=>array('tjk','tj'),'Tanzania'=>array('tza','tz'),'Thailand'=>array('tha','th'),'Timor-Leste'=>array('tls','tl'),'Togo'=>array('tgo','tg'),'Trinidad and Tobago'=>array('tto','tt'),'Tunisia'=>array('tun','tn'),'Turkey'=>array('tur','tr'),'Turks and Caicos'=>array('tca','tc'),'UAE'=>array('are','ae'),'Uganda'=>array('uga','ug'),'UK'=>array('gbr','gb'),'Ukraine'=>array('ukr','ua'),'Uruguay'=>array('ury','uy'),'USA'=>array('usa','us'),'Uzbekistan'=>array('uzb','uz'),'Vanuatu'=>array('vut','vu'),'Vatican City'=>array('vat','va'),'Venezuela'=>array('ven','ve'),'Vietnam'=>array('vnm','vn'),'Wallis and Futuna'=>array('wlf','wf'),'Western Sahara'=>array('esh','eh'),'Yemen'=>array('yem','ye'),'Zambia'=>array('zmb','zm'),'Zimbabwe'=>array('zwe','zw'),];  
        $iso2=$countries[$country][1];
        
        if ($country=="Global"){
            $url="https://corona-api.com/timeline";
        }else{
            $url="https://corona-api.com/countries/".$iso2;
        }
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                
            ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        
        $TotalCases = array();
        $NewCases = array();
        $TotalDeaths = array();
        $NewDeaths = array();
        $TotalRecovred = array();
        $NewRecovred = array();
        $date = array();
        $active = array();


        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            $ss =json_decode($response);
            $array = json_decode(json_encode($ss), true);
            
            if ($country=="Global"){
                $array = $array["data"];
            }else{
                $array = $array["data"]["timeline"];
            }
            $array = array_reverse($array);
            foreach ($array as $value)
            {
                array_push($date,$value["date"]);
                array_push($TotalCases,$value["confirmed"]);
                array_push($TotalDeaths,$value["deaths"]);
                array_push($TotalRecovred,$value["recovered"]);
                array_push($NewCases,$value["new_confirmed"]);
                array_push($NewRecovred,$value["new_recovered"]);
                array_push($NewDeaths,$value["new_deaths"]);
                array_push($active,$value["active"]);
            }
            //dd($NewRecovred);
            $StatArray = array($date,$TotalCases,$TotalDeaths,$TotalRecovred,$NewCases,$NewRecovred,$NewDeaths,$active);
            //dd($StatArray);
        }   
        return $StatArray;
    }
    ///////////////////////////////////////////////////


    ////////////////////////////table data//////////////
    public function tableData() {
        
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://vaccovid-coronavirus-vaccine-and-treatment-tracker.p.rapidapi.com/api/npm-covid-data/countries",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "x-rapidapi-host: vaccovid-coronavirus-vaccine-and-treatment-tracker.p.rapidapi.com",
                "x-rapidapi-key: 4c9a058b7fmsha4c2cdba708deaep174172jsn8b3bc1b035a7"
            ],
        ]);
        
        
                    $data = curl_exec($curl);
                    $json = json_decode($data);
                    curl_close($curl);

    return $json;
    
    }
    ///////////////////////////////////////////////


    
    public function main($country="j")
    {
        //echo $country;
        
        $DefaultCountry = $this->getLocation();
        $DefaultCountry = 'Global';    //change , GeoIP not used

        if ($country=='j') {
            $country=$DefaultCountry;
            $_SERVER['REQUEST_URI'] .= "/".$DefaultCountry;
        }
    
        $barreArray = $this->getBarre($country);
        $StatArray = $this->StatData($country);
        $tableArray = $this->tableData();
        $news = $this->newsapi($country);

        $MyCountry = $this->getLocation();
        
        //print_r($news);
        return view('parties', [
            'MyCountry' => $MyCountry,
            'data' => $barreArray,
            'StatArray' => $StatArray,
            'json' => $tableArray,
            'newsdata' => $news[0],
            'checknews' => $news[1]

        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}