<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $table = 'articles';

    protected $fillable = [
        'title', 'description', 'publish','category_id','feature_image','home_page','main_link'
    ];

    public function category()
    {
        return $this->belongsTo('App\Category','category_id');
    }
}
