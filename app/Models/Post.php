<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    // protected $table = 'posts_articles';  // Se puede cambiar el nombre de la tabla del modelo 
    protected $fillable = ['title','body'];
}
