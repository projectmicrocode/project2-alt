<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('addDeTai',['as'=>'getDeTai','uses'=>'DeTaiController@getForm']);
Route::post('addDeTai',['as'=>'postAdd','uses'=>'DeTaiController@postForm']);

Route::get('listDeTai',['as'=>'listDeTai','uses'=>'DeTaiController@getListDeTai']);
//công ty
Route::get('addCompany',['as'=>'getCompany','uses'=>'CompanyController@getCongTy']);
Route::post('addCompany',['as'=>'postCompany','uses'=>'CompanyController@postCongTy']);
Route::get('dangKiSV',['as'=>'dangKiSV',function(){
	return view('dangKiSinhVien');
	}]);
Route::post('dangKiSV',['as'=>'postDangKiSV','uses'=>'DangKiSVController@postDangKiSV']);

//login
Route::get('/',['as'=>'getLogin','uses'=>'LoginController@getLogin']);
Route::post('login',['as'=>'postLogin','uses'=>'LoginController@postLogin']);
//quan ly sinh vien
Route::get('listSV',['as'=>'getListSV','uses'=>'SinhVienController@getListSV']);
Route::get('ListSinhVien',['as'=>'ListSinhVien',function(){
	return view('listSV');
}]);
Route::post('addSinhVien',['as'=>'addListSV','uses'=>'SinhVienController@getAddListSV']);
Route::get('editSV/{id}',['uses'=>'SinhVienController@getEditSV']);
Route::post('editSV/{id}',['as'=>'postEdit','uses'=>'SinhVienController@postEditSV']);
Route::get('deleteSV/{id}',['as'=>'getDelete','uses'=>'SinhVienController@getDelete']);

Route::get('ListGiaoVien',['as'=>'ListGiaoVien',function(){
	return view('listGV');
}]);
//list,post giang vien
Route::get('listGV',['as'=>'getListGV','uses'=>'GiangVienController@getListGV']);
Route::post('addGiaoVien',['as'=>'addListGV','uses'=>'GiangVienController@getAddListGV']);
Route::get('deleteGV/{id}',['as'=>'getDeleteGV','uses'=>'GiangVienController@getDelete']);
//giang vien phụ trách
Route::get('giangVienPhuTrach',['as'=>'giangVienPhuTrach',function(){
	return "đây là trang của giang vien phụ trách";
}]);
Route::get('listSVDacBiet',['as'=>'listSVDacBiet',function(){
	return view('listSVDacBiet');
}]);
Route::post('duyetDeTai/{id}',['as'=>'duyetDeTai','uses'=>'DeTaiController@postDuyetDeTai']);


//giang vien hướng dẫn
Route::get('giangVienHuongDan',['as'=>'giangVienHuongDan',function(){
	return "đây là trang của giang vien hướng dẫn";
}]);
//Sinh Viên
Route::get('listDeTaiSV',['as'=>'listDeTaiSV','uses'=>'DeTaiController@getListDeTaiSV']);

Route::get('nopBaoCao',['as'=>'getNopBaoCao','uses'=>'nopBaoCaoController@getNopBaoCao']);
Route::post('nopBaoCao',['as'=>'postNopBaoCao','uses'=>'nopBaoCaoController@postNopBaoCao']);

Route::get('decuong', function() {
	return view('Instructor');
});

