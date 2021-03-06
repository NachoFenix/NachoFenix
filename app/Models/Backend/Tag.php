<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Tag extends Model
{
    use HasFactory;
    protected $guarded = [];

    public static function setTag($tags)
    {
        $data = [];
        if (is_array($tags)) {
            foreach($tags as $tag){
                if(is_numeric($tag)){
                    $data[] = $tag;
                }else{
                    $tag = ucfirst(trim($tag));
                    $slug = Str::slug($tag, '-');
                    $data[] = tag::firstOrCreate([
                        'nombre' => $tag,
                        'slug' => $slug
                    ])->id;
                }
            }
        }
        return $data;
    }
}
