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
        'delete_pass'
    ];
    // configからカテゴリ取得関数 ref :https://qiita.com/masakichi_eng/items/b9948f7d14de793dc014
      public function getCategoryName()
      {
          return config('category.'.$this->category_id);
      }

      public function category()
      {
          return $this->belongsTo('App\Category');
      }   
       
}