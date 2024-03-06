<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    public function CarsHouse()
    {
        return $this->hasMany(CarsHouse::class);
    }
    public function optionals()
    {
        return $this->belongsToMany(Optional::class);
    }

    protected $fillable = ['cars_house_id', 'modello', 'prezzo', 'alimentazione', 'anno', 'numero_telaio', 'descrizione', 'trazione', 'carrozzeria', 'porte', 'cavalli', 'cilindrata','image'];
}
