<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = [
        'Nom',
        'Prenom',
        'Adresse_postale',
        'Email',
        'Numero_de_telephone',
        'Date_de_naissance'
    ];

}
