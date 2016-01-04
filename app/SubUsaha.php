<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubUsaha extends Model
{
    protected $table = "app_sub_usaha";
    
    public $timestamps = false;

    public function usaha()
    {
    	return $this->belongsTo('App\Usaha','id');
    }
}