<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    function index() {
        return view('welcome');
    }

        function route_controller($id,$name){
            // return [
            //     'msg'=>'your user id is '.$id.'your name is '.$name
            // ];
            return view('user.profile',['id'=>$id,'name'=>$name]);
        }

}

 