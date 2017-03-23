<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DeTai extends Model
{
    protected $table = 'detai';
    protected $guarded = [];

    public static function getDetai() {
	$value=DB::table('detai')->get();
	return $value;
}

}


