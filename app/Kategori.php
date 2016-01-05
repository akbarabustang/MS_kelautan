<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = "site_kategori";

    public $timestamps = false;

    public function blog(){
    	return $this->belongsToMany('App\Blog', 'blog_kategori', 'id_kategori', 'id_blog');
    }
    
}
