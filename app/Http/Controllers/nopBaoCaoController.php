<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\NopBaoCaoRequest;
// use App\storage\baocao;
use App\File;
use DateTime;
use Illuminate\Support\Facades\Response ;

class nopBaoCaoController extends Controller
{
    public function getNopBaoCao(){
    	return view("nopBaoCao");
    }
    public function postNopBaoCao(NopBaoCaoRequest $request){
    	
    	if($request->hasFile('chonFile')){
            $name =$request->file('chonFile')->getClientOriginalName();
    		$request->file('chonFile')->move('../storage/baocao',$name);
    		$file = new File;
            $file->tenfile = $request->file('chonFile')->getClientOriginalName();
            $file->hinhthuc = $request->sltCate;
            $file->created_at = new DateTime;
            $file->save();
            return redirect()->route('showBaoCao');
    	}
    	else{
    		echo "chưa có file";
    	}
 		
 		
    }
    public function showBaoCao(){
        $data = File::select('tenfile')->get()->toArray();
        return view('DanhSachFile',['data'=>$data]);
    }
    public function downBaoCao(){
         $data = File::select('tenfile')->get()->toArray();

        // $filename = '20138491-Nguyen Co Tuan.docx';
            
         foreach ($data as $value) {
             $filename = $value['tenfile'];
             $path = storage_path('baocao/'.$filename);
            return Response::make(file_get_contents($path), 200, [
            'Content-Type' => 'application/msword',
            'Content-Disposition' => 'inline; filename="'.$filename.'"']);
         }
   

    }
}
