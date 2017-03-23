<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AddDeTaiRequest;
use App\DeTai;
use DateTime;



class DeTaiController extends Controller
{
    public function getForm(){
       
       
    	return view('dangkidetai');
    }
    public function postForm(AddDeTaiRequest $request){
    	$detai = new DeTai;
    	$detai->tendetai = $request->txtName;
    	$detai->sosinhviennhan = $request->numSV;
        $detai->yeucaukinang = $request->txtKiNang;
        $detai->dinhhuongcongnghe = $request->txtDinhHuong;
        $detai->tienganh = $request->txtTiengAnh;
        $detai->noidungcv = $request->txtNoiDung;
        $detai->tinhtrang = 0;
    	$detai->created_at = new DateTime();
    	$detai->save();
    	
        return redirect()->route('listDeTai');
    }
    public function getListDeTai(){
         $data = DeTai::getDetai();
        $view = array('tendetai' => $data);
    	return view('list-subject',compact('data'));
    }
}
