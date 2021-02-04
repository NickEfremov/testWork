<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustUrl;
use App\Http\Requests\OrigUrl;
use App\Url;
use Illuminate\Http\Request;

class GenerateController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function cutter()
    {
        return view('cutter');
    }

    public function stat()
    {

        return view('stat', ['data' => Url::all()]);
    }


    public function done(OrigUrl $origUrl)
    {
        $newUrl = Url::createNewUrl();
        Url::saveUrls($origUrl->input('userUrl'), $newUrl);

        return view('cutterDone', ['newUrl' => $newUrl]);
    }


    public function custom(CustUrl $custUrl)
    {
        /*$custUrlToSave=$custUrl->input('customUrl');
        $host=$custUrl->getSchemeAndHttpHost();
        dd(strrpos($custUrlToSave, $host.'/'));
        if (Url::findDouble($custUrlToSave)  ){
echo 222;
            return  redirect('done')->with('newUrl',$custUrl->input('newUrl'));
        }else{
           //validation

            return  view('cutterCustom',['newUrl'=>$custUrl->input('customUrl')])->with('success','DONE!!!');
        }*/

    }
}
