<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photos extends Model
{
    //disabling timestamps
    public $timestamps=false  ;
    //table_name;
    protected $table="tbl_posts_photos";
    //fillable fields
    protected $fillable=['img_dir','name','post_id'];
    public function posts_phots()
    {
        return $this->belongTo('App\Post');
    }
}
