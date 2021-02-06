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


    public function generate(OrigUrl $origUrl)
    {
        $newUrl = Url::createNewUrl();
        Url::saveUrls($origUrl->input('userUrl'), $newUrl);

        return view('cutterDone', ['newUrl' => $newUrl]);
    }






}
