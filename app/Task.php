<?php

namespace App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{   
    // protected $touches = ['comment'];

    protected $fillable = [
        'cname',
        'url',
        'description',
        'thumbnail',
        'yourname',
        'youremail',
        'delete_pass',
        'category_id'
    ];


      public function category()
      {
          return $this->belongsTo('App\Category');
      }   


       
}