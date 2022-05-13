<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Plan extends Model
{
    use HasFactory;
    protected $fillable = ['name','slug','price','description'];

    public function getRouteKeyName()
    {
        return 'slug';
    }
    // Relacion muchos a muchos
    public function user(){
        return $this->belongsToMany(User::class);
    }
}
