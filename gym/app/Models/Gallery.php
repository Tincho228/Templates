<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillable = ['url'];
    use HasFactory;

    //Relacion polimorfica
    public function imageable(){
        return  $this->morphTo();
    }
}
