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

    public function stat()                  //вывод статистики
    {
        if (Auth::user()->checkAdmin()){    //если админ
            $res = Url::all();              //ищем все ссылки
        }else{
            $res = User::find(Auth::id())->links;   //если нет- через связь ОдинКоМногим
        }                                           //ищем ссылки текущего пользователя

        return view('stat', ['data' =>$res,'i'=>1]);  //переход в окно статистики + данные (i для нумерации строк)
    }


    public function generate(OrigUrl $origUrl)
    {
        $newUrl = Url::createNewUrl();                               //генерация ссылки
        Url::saveUrls($origUrl->input('userUrl'), $newUrl);     //сохранение ссылки

        return view('cutterDone', ['newUrl' => $newUrl]);      //переход в окно Done
    }


    public function cutterAPI(CuterAPI $request)                //генерация ссылки для внешнего запроса
    {
        $validate = Validator::make($request->all(), [          //валидация
            'url' => 'required|min:20|max:300|active_url',
        ]);

        if ($validate->fails())
        {
            return response("Wrong Link",200);    //если ошибка отправляем сообщение об ошибке
        }
        $newUrl = Url::createNewUrl();                          //генерация ссылки
        Url::saveUrls($request->url, $newUrl);                  //сохранение ссылки

        return response($newUrl,200);                     //отправляем ответ со сгенерированной ссылкой
    }
}
