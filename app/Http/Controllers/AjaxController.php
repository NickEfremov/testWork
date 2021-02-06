<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Url;
use function Composer\Autoload\includeFile;

class AjaxController extends Controller
{
    public function checkCustom(Request $request){
        $host  = 'http://127.0.0.1:8000/';
        $custUrl = $request->customUrl;
        $genUrl = $request->genUrl;
        $msg=false;
        if(strrpos($custUrl, $host)==0){
            $addr=substr($custUrl,strlen($host));


            if (preg_match('/^([a-zA-Z0-9._\\-]){1,30}$/', $addr) == 1){


                If(Url::findDouble($custUrl) == false){

                    $data = Url::where('genUrl',$genUrl)->first();
                    $data->genUrl=$custUrl;
                    $data->save();
                    $msg=true;
                }
            }
        }
        return response()->json(array('msg'=> $msg), 200);

    }
}
