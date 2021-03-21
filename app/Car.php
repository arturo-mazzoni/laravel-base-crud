<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'marca', 'modello', 'cilindrata', 'prezzo', 'descrizione'
    ];
}

