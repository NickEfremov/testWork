<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Url;
use function Composer\Autoload\includeFile;

class AjaxController extends Controller
{
    public function checkCustom(Request $request){
        $host  = config('myConf.baseUrl');
        $custUrl = $request->customUrl;
        $genUrl = $request->genUrl;

        if(strrpos($custUrl, $host)==0){
            $addr=substr($custUrl,strlen($host));


            if (preg_match('/^([a-zA-Z0-9._\\-]){1,30}$/', $addr) == 1){


                If(Url::findDouble($custUrl) == false){

                    $data = Url::where('genUrl',$genUrl)->first();
                    $data->genUrl=$custUrl;
                    $data->save();
                    return response()->json(array('msg'=> true), 200);
                }
            }
        }
        return response()->json(array('msg'=> false), 200);

    }
}
