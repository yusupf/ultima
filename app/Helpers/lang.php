<?php

use Illuminate\Support\Facades\Storage;
// use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Cache;


function lang($code){
    $lang_id = Storage::get('lang/id.json');
    $lang_en = Storage::get('lang/en.json');

    $id = JSON_DECODE($lang_id, true);
    $en = JSON_DECODE($lang_en, true);
    
    $lang = Cache::get('lang');
    if(!empty($lang)){
        if($lang == 'id'){
            return $id[$code];
        }else{
            return $en[$code];
        }
    }else{
        return $en[$code];
    }
}

?>