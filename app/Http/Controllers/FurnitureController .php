<?php

namespace App\Http\Controllers;

use App\Models\Furniture;
use Illuminate\Http\Request;

class FurnitureController extends Controller
{
    public function dangKi(){
        return view('user.dangki');
    }
    public function save(Request $request){
        $obj = new Furniture();
        $obj->code = $request->get('code');
        $obj->name = $request->get('name');
        $obj->price = $request->get('price');
        $obj->avatar = $request->get('avatar');
        $obj->save();
    }
    public function list(Request $request){
        $list = Furniture::all();

    }
}
