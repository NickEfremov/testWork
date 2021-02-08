<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Url;
use function Composer\Autoload\includeFile;

class AjaxController extends Controller
{
    //функция обработки кастомной ссылки
    public function checkCustom(Request $request)
    {
        $host  = config('myConf.baseUrl');
        $custUrl = $request->customUrl;     //сгенерированная ссылка
        $genUrl = $request->genUrl;         //кастомная ссылка

        if(strrpos($custUrl, $host)==0)     //валидация кастомной ссылки -содержит ли адрес базовый хост
        {
            $addr=substr($custUrl,strlen($host));           //вырезаем базовый хост

            if (preg_match('/^([a-zA-Z0-9._\\-]){1,30}$/', $addr) == 1)      //регулярное выражение
            {                                                                       //для второй части ссылки

                If(Url::findDouble($custUrl) == false)                              //ищем дублера в БД
                {
                    $data = Url::where('genUrl',$genUrl)->first();
                    $data->genUrl=$custUrl;
                    $data->save();
                    return response()->json(array('msg'=> true), 200);         //если нет дублера - сохраняем в БД и отвечаем браузеру ОК
                }
            }
        }
        return response()->json(array('msg'=> false), 200);                     //валидация не пройдена. отвечаем браузеру ОШИБКА
    }
}
