<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CompanyRequest;
use App\Company;
use DateTime;

class CompanyController extends Controller
{
    public function getCongTy(){
    	return view('CongTyDangKy');
    }
    public function postCongTy(CompanyRequest $request){
    	$company = new Company;
    	$company->username = $request->username;
    	$company->password = $request->password;
    	$company->name = $request->company;
    	$company->address = $request->txtAddress;
    	$company->email = $request->txtEmail;
    	$company->phone = $request->txtPhone;
    	$company->created_at = new DateTime();
    	$company->save();
    	 
        return redirect()->route('getLogin');
    }

}
