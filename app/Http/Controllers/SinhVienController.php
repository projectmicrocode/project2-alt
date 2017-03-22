<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SinhVien;
use App\Http\Requests;
use DateTime;
class SinhVienController extends Controller
{
    public function getListSV(){
    	return SinhVien::orderBy('id','DESC')->get();
    }
    public function getAddListSV(Request $request){
    	$sinhvien = new SinhVien;
    	$sinhvien->fullname = $request->name;
    	$sinhvien->mssv = $request->txtMssv;
    	$sinhvien->email = $request->txtMssv."@student.hust.edu.vn";
    	$sinhvien->class = $request->sltCate;
    	$sinhvien->created_at = new DateTime();
    	$sinhvien->save();
    	return "Thêm Thành Công";
    }
    public function getEditSV($id){
        return SinhVien::findOrFail($id);
    }
    public function postEditSV(Request $request,$id){
        
        $sinhvien = SinhVien::findOrFail($id);
        $sinhvien = new SinhVien;
        $sinhvien->fullname = $request->name;
        $sinhvien->mssv = $request->txtMssv;
        $sinhvien->email = $request->txtMssv."@student.hust.edu.vn";
        $sinhvien->class = $request->sltCate;
        $sinhvien->updated_ad = new DateTime();
        $sinhvien->save();
        return "Sửa Thành Công";
    }
    public function getDelete($id){
        $sinhvien = SinhVien::findOrFail($id);
        $sinhvien->delete();
        return "Xóa Thành Công";
    }
}
