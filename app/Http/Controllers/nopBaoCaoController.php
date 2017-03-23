<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class nopBaoCaoController extends Controller
{
    public function getNopBaoCao(){
    	return view("nopBaoCao");
    }
    public function postNopBaoCao(Request $request){
    	
    }
}
