<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $fillable=['cars_house_id','modello','prezzo','alimentazione','anno','numero_telaio','descrizione','trazione','carrozzeria','porte','cavalli','cilindrata'];
}
