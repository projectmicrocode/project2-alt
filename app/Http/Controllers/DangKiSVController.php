<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DangKiSinhVienRequest;
use App\SinhVien;

class DangKiSVController extends Controller
{
     public function postDangKiSV(DangKiSinhVienRequest $request){
        $sinhvien = SinhVien::select('fullname','mssv')->get()->toArray();
        $count=0;
        foreach ($sinhvien as  $val) {
        	# code...
        	if(($val['fullname'] == $request->txtTenSV) && ($val['mssv'] == $request->txtMssv)){
        	$count++;
        }
        }
        if($count == 1){
            return redirect()->route('getSinhVienDacBiet');
        }
        else{
        	return redirect()->back();
        }
    }
   
}
