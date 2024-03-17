<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Environment;

class EnvironmentController extends Controller
{
    public function create(Request $request){
        $data=new Environment();
        $data->id_node=$request->id_node;
        $data->id_message=$request->id_message;
        $data->suhu=$request->suhu;
        $data->kelembaban=$request->kelembaban;
        $data->save();

        $data = ['status'=>"success"];
        return $data;
    }

    public function baca(){
        $pembacaan = Environment::get();

        return response()->json($pembacaan);
    }
}
