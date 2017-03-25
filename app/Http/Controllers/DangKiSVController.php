<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DangKiSinhVienRequest;
use App\SinhVien;
use App\SinhVienDacBiet;
// use DateTime;
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
            // return redirect()->route('addSinhVienDacBiet');
            $sinhvien = new SinhVienDacBiet;
            $sinhvien->ten = $request->txtTenSV;
            $sinhvien->mssv = $request->txtMssv;
            // $sinhvien->created_at() = new DateTime;
            $sinhvien->save();
            return "Thêm Thành Công!";

        }
        else{
        	return redirect()->back();
        }
    }
    public function listSVDacBiet(){
        $data = SinhVienDacBiet::select('ten')->get()->toArray();
        return view('listSVDacBiet',['data'=>$data]);
    }
   
}

