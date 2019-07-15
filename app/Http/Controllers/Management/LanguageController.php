<?php

namespace App\Http\Controllers\Management;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LanguageController extends Controller
{
    public function index(){
        // $lang_id = file_get_contents(url('lang/id.json'));
        // $lang_en = file_get_contents(url('lang/en.json'));
        $lang_id = Storage::get('lang/id.json');
        $lang_en = Storage::get('lang/en.json');

        

        $id = JSON_DECODE($lang_id, true);
        $en = JSON_DECODE($lang_en, true);

        // print_r(count($id)); 
       
        return view('management.language.index', compact('id', 'en'));
    }

    public function update(Request $request){
        // dd($request->all());

        // dd('tes');

        $codes = $request->lang_code;
        $id = $request->lang_id;
        $en = $request->lang_en;

// dd($code);
$lang_en = [];
$lang_id = [];
$n = 0; 
        foreach($codes as $code){
            $lang_en[$code] = $en[$n];
            $lang_id[$code] = $id[$n];
            $n++;
        }

        $state_en = json_encode($lang_en);
        $state_id = json_encode($lang_id);
        Storage::disk('local')->put('lang/id.json', $state_id);
        Storage::disk('local')->put('lang/en.json', $state_en);
         
        return redirect('/management/language');
    }
}
