<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class SayitController extends Controller
{
  
    public function sayit(Request $request)
    {
      if(isset($request['btn'])){
         $text = substr($request['text'] ,0, 100);
          $text = urlencode($text);
           $mp3 = file_get_contents("https://translate.google.com/translate_tts?ie=UTF-8&client=gtx&q=.$text.&tl=en-us");
          $name  =time().'.'.'mp3';
         $path = public_path('/audio/');
         $file = $path.$name;
        file_put_contents($file, $mp3);
       $words = explode(' ', $request['text']);
     return view('texttospeech',['file'=>$name, 'words'=>$request['text'] ]);
     //  return dd($words);
    }
       return 'file dosent exist';
      
    }



}
