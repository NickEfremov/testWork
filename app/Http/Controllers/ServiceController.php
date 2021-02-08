<?php

namespace App\Http\Controllers;

use App\Url;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    public function redirectToUrl($alias)                    //редирект с короткой ссылки по оригинальной из БД
    {
        $redirectUrl = config('myConf.baseUrl') . $alias;
        $result = Url::where('genUrl', $redirectUrl)->first(); //ищем в БД

        if ($result != null) {                              //если нашли короткую ссылку в БД
            Url::counterInc($result->id);                   //при переходе наращиваем счетчик статистики
            return redirect()->to($result->origUrl);        //перенаправляем
        } else {                                            //если  не нашли короткую ссылку в БД - 404
            return view('404');
        }
    }


}
