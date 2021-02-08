<?php

namespace App;

use Closure;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class Url extends Model
{

    public static function saveUrls($origUrl, $newUrl)
    {
        $toDb = new self();
        $toDb->origUrl = $origUrl;
        $toDb->genUrl = $newUrl;
        $toDb->user_id = Auth::id();
        $toDb->save();
    }

    public static function createNewUrl()
    {
        $newUrl = self::generateNewUrl();
        while ((self::findDouble($newUrl)) != false) {
            $newUrl = self::generateNewUrl();
        }

        return $newUrl;
    }

    public static function generateNewUrl()
    {
        $newUrl = '';
        $baseHost = config('myConf.baseUrl');
        $abs = '1234567890qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM';
        $count = strlen($abs) - 1;
        for ($i = 1; $i <= 8; $i++) {
            $newUrl .= $abs[rand(0, $count)];
        }
        return $baseHost . $newUrl;
    }

    public static function findDouble($param)
    {
        if ((self::where('genUrl', $param)->first()) != null) {
            return true;
        } else {
            return false;
        }
    }

    public static function counterInc($id)
    {
        $data = Url::find($id);
        $data->counter++;
        $data->save();
    }


    //public function getAllUserLinks($id){
      //  return $this::find($id);
    //}


    public function getUser(){
        return $this->belongsTo(User::class);
    }
}
