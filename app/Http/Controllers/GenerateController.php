<?php

namespace App\Http\Controllers;

use App\Http\Middleware\CheckAdmin;
use App\Http\Requests\CustUrl;
use App\Http\Requests\CuterAPI;
use App\Http\Requests\OrigUrl;
use App\Url;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

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
        if (Auth::user()->checkAdmin()){
            $res = Url::all();
        }else{
            $res = User::find(Auth::id())->links;
        }

        return view('stat', ['data' =>$res,'i'=>1]);
    }


    public function generate(OrigUrl $origUrl)
    {
        $newUrl = Url::createNewUrl();
        Url::saveUrls($origUrl->input('userUrl'), $newUrl);

        return view('cutterDone', ['newUrl' => $newUrl]);
    }


    public function cutterAPI(CuterAPI $request){
        $validate = Validator::make($request->all(), [
            'url' => 'required|min:20|max:300|active_url',
        ]);

        $newUrl = Url::createNewUrl();
        Url::saveUrls($request->url, $newUrl);

        if ($validate->fails())
        {
            return response("Wrong Link",200);
        }

        return response($newUrl,200);
    }



}
