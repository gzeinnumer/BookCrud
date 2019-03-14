<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    //todo 6 lihat saja

    //todo 27
    protected $fillable=[
        'category_id',
        'title',
        'slug',
        'content'
    ];
}
