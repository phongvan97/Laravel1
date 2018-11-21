<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class Mycontroller extends Controller
{
    //
    public function Xinchao(){
        echo " Hi ae :v !";
    }
    public function KhoaHoc($ten){
        echo $ten;
    }
    public function GetURL(Request $request){
//        echo $request->Url();
        if($request->isMethod("Get"))
            echo "get";
        else
            echo "not Get";
        echo" <br>";
        if($request->is("*ecs*"))
            echo "Have";
        else
            echo "not have";
    }
    public function GetData(Request $Data){
        echo $Data->Name;
        echo $Data->Age;
    }
}
