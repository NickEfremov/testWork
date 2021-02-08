<?php

namespace App;

use Closure;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class Url extends Model
{

    public static function saveUrls($origUrl, $newUrl)    //сохраняем данные в БД
    {
        $toDb = new self();
        $toDb->origUrl = $origUrl;
        $toDb->genUrl = $newUrl;
        $toDb->user_id = Auth::id();
        $toDb->save();
    }

    public static function createNewUrl()                //создаем новую ссылку
    {
        $newUrl = self::generateNewUrl();                //генерируем новую ссылку
        while ((self::findDouble($newUrl)) != false) {   //ищем повторы и заменяем
            $newUrl = self::generateNewUrl();
        }

        return $newUrl;                                  //возвращаем новую ссылку
    }

    public static function generateNewUrl()              //генерация ссылки
    {                                                    //из набора символов берем случайные восемь
        $newUrl = '';                                    //возвращаем готовую ссылку
        $baseHost = config('myConf.baseUrl');
        $abs = '1234567890qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM';
        $count = strlen($abs) - 1;

        for ($i = 1; $i <= 8; $i++) {
            $newUrl .= $abs[rand(0, $count)];
        }

        return $baseHost . $newUrl;
    }

    public static function findDouble($param)           //ищем дубль в БД возвращаем true/false
    {
        if ((self::where('genUrl', $param)->first()) != null) {
            return true;
        } else {
            return false;
        }
    }

    public static function counterInc($id)              //наращиваем счетчик по id ссылки
    {
        $data = Url::find($id);
        $data->counter++;
        $data->save();
    }

}
