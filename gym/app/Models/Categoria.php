<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'slug','description','price'];
    // Relacion uno a muchos

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function post(){
        return $this->hasMany(Post::class);
    }
}
