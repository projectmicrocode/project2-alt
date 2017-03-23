<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginCompanyRequest;
use App\Company;
use App\Admin;
use App\SinhVien;
use App\GiangVien;
class LoginController extends Controller
{
 public function getLogin(){
 	

 	return view('login');
 } public function postLogin(LoginCompanyRequest $request){
 	$dataCom  = Company::select('username','password')->get()->toArray();
 	$dataAd  = Admin::select('username','password')->get()->toArray();
 	$dataSV = SinhVien::select('email','mssv')->get()->toArray();
 	$dataGV  = GiangVien::select('email','password','chucvu')->get()->toArray();
 	$count = 0;
 	foreach ($dataCom as $val1) {
 		$usernameCom = $val1['username'];
 		$passCom = $val1['password'];
 		if(($usernameCom == $request->txtUsername) && ( $passCom == $request->txtPass)){
 			$count++;
 			 return redirect()->route('getDeTai');

 		}

 	}
 	foreach ($dataAd as $val) {
 		$usernameAd = $val['username'];
 		$passAd = $val['password'];
 		if(($usernameAd == $request->txtUsername) && ( $passAd == $request->txtPass)){$count++;
 			$count++;
 			 return redirect()->route('ListSinhVien');
 		}
 	}
 	foreach ($dataSV as $val1) {
 		$usernameSV = $val1['email'];
 		$passSV = $val1['mssv'];
 		if(($usernameSV == $request->txtUsername) && ( $passSV == $request->txtPass)){
 			$count++;
 			 return redirect()->route('listDeTaiSV');

 		}

 	}
 	foreach ($dataGV as $val1) {
 		$usernameSV = $val1['email'];
 		$passSV = $val1['password'];
 		// $chucvu = ;
 		if(($usernameSV == $request->txtUsername) && ( $passSV == $request->txtPass)){
 			$count++;
 			
 			if($val1['chucvu'] =="Giảng viên hướng dẫn"){
 			  	return redirect()->route('giangVienHuongDan');
 			}else{
 				return redirect()->route('listDeTai');
 			}


 		}
 		
 	}

 	if($count!=1){
 		return redirect()->back();
 	}

 	
 }

}
