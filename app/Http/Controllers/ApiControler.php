<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Concert;

class ApiControler extends Controller
{
    public function listApi(){
        return response()->json(Concert::all());
    }

    public function createApi(Request $request){
        $name = $request->input('name');
        $date = $request->input('date');

        if($name){
            $concert = new Concert();
            $concert->name = $name;
            $concert->date = $date;
            $concert->save();
            return response()->json(["status" => "success"]);
        }else{
            return response()->json(["status" => "error"]);
        }
    }

    public function deleteApi($id){
        $concert = Concert::find($id);
        if($concert){
            $concert->delete();
            return response()->json(["status" => "success"]);
        }else{
            return response()->json(["status" => "error"]);
        }
    }
}
