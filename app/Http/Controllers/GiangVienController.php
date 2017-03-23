<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GiangVien;
use App\Http\Requests;
use DateTime;
class GiangVienController extends Controller
{
    public function getListGV(){
    	return GiangVien::orderBy('id','DESC')->get();
    }
    public function getAddListGV(Request $request){
    	$giangvien = new GiangVien;
    	$giangvien->name = $request->name;
    	$giangvien->email = $request->txtEmail;
    	$giangvien->password = $request->txtPass;
    	$giangvien->chucvu = $request->sltCate;
    	
    	$giangvien->created_at = new DateTime();
    	$giangvien->save();
    	return "Thêm Thành Công";
    }
    public function getDelete($id){
        $giangvien = GiangVien::findOrFail($id);
        $giangvien->delete();
        return "Xóa Thành Công";
    }
}
