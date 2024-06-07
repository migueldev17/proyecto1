<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    /**
     * relacion de uno a muvhos inversa
     */
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
    /**
     * Relacion de muchos a muchos
     */
    public function tags(){
        return $this->belongToMany(Tag::class);
    }
    public function Image(){
        return $this->morphOne(image::class,'imageable');
        }
    


}
