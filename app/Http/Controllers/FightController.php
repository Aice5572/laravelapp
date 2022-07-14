<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class FightController extends Controller
{
    
    // public function index(Request $request)
    // {
    //     $data = [
    //         'msg'=>'これはコントローラから渡されたメッセージです。',
    //         'id'=>$request->id
    //     ];
    //     return view('fight.index', $data);
    // }
       
    public function index(Request $request)
    {
      return view('fight.index', ['data'=>$request->data]);
    }
}
