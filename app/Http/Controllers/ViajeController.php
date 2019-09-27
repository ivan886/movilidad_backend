<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Viaje;
use  App\Http\Resources\ViajeResource;

class ViajeController extends Controller
{
    public function store(Request $request){
        $viaje=new Viaje();
        $viaje->imei=$request->input('imei');
        $viaje->destino=$request->input('destino');
        $viaje->medio=$request->input('medio');
        $viaje->proposito=$request->input('proposito');
        $viaje->costo=$request->input('costo');
        $viaje->personas=$request->input('personas');
          

          dd($viaje);  
       
        if ($post->save()) {
            return new PostResource($post);
        }
//         $viaje->save();
    }

    public function index(){
    	 return ViajeResource::collection(Viaje::all());
                 
    }

}
