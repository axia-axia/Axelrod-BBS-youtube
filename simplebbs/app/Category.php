<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * カテゴリーの一覧を取得
     */
    public function getLists()
    {
        $categories = Category::orderBy('id','asc')->pluck('name', 'id');
    
        return $categories;
    }

    public function tasks(): HasMany
    {
        return $this->hasMany('App\Task');
        
    }
}