<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotoController extends Controller
{

   public function index()
   {
   $request = 'http://api.openweathermap.org/data/2.5/forecast/?APPID=9a505cc9de1de6dfa3cd808d0dd98695&q=Amman';
   $response  = file_get_contents($request);
   $jsonobj  = json_decode($response);
   return view('welcome',array('data'=>$jsonobj -> list[0] -> main -> temp));
   }

}
