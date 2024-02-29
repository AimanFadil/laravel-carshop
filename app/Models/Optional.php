<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Optional extends Model
{
    use HasFactory;
    protected $fillable =['name', 'prezzo'];
    public function Cars (){
        return $this->belongsToMany(Car::class);
    }
}
