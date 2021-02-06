<?php

namespace App\Http\Controllers;

use App\Url;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    public function redirectToUrl($alias)
    {
        $redirectUrl = 'http://127.0.0.1:8000/' . $alias;
        $result = Url::where('genUrl', $redirectUrl)->first();

        if ($result != null) {
            Url::counterInc($result->id);
            return redirect()->to($result->origUrl);
        } else {
            return view('404');
        }
    }


}
