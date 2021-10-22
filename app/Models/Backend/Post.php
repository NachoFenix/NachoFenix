<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['usuarios_id','titulo','slug','descripcion', 'contenido','estado'];

    public function categoria(){
        return $this->belongsToMany(Categoria::class, 'posts_categorias','posts_id','categorias_id');
    }
    public function tag(){
        return $this->belongsToMany(Tag::class, 'posts_tags', 'posts_id', 'tags_id');
    }
}
