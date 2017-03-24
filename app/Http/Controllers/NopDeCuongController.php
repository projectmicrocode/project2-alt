<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\NopDeCuongRequest;

use App\DeCuong;
use DateTime;
use Illuminate\Support\Facades\Response ;

class NopDeCuongController extends Controller
{
    public function getNopDeCuong(){
    	return view('Instructor');
    }
    public function postNopDeCuong(NopDeCuongRequest $request){
    	if($request->hasFile('chonFile')){
            $name =$request->file('chonFile')->getClientOriginalName();
    		$request->file('chonFile')->move('../storage/decuong',$name);
    		$decuong = new DeCuong;
            $decuong->tendecuong = $request->file('chonFile')->getClientOriginalName();
            
            $decuong->created_at = new DateTime;
            $decuong->save();
            return redirect()->route('showDeCuong');
    	}
    	else{
    		echo "chưa có file";
    	}
    }
    public function showDeCuong(){
    	$data = DeCuong::select('tendecuong')->get()->toArray();
        return view('DanhSachDeCuong',['data'=>$data]);
    }
    public function downDeCuong(){
    	$data = DeCuong::select('tendecuong')->get()->toArray();

        // $filename = '20138491-Nguyen Co Tuan.docx';
            
         foreach ($data as $value) {
             $filename = $value['tendecuong'];
             $path = storage_path('decuong/'.$filename);
            return Response::make(file_get_contents($path), 200, [
            'Content-Type' => 'application/msword',
            'Content-Disposition' => 'inline; filename="'.$filename.'"']);
         }
    }
}
