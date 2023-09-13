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
        'Adresse postale',
        'Adresse email',
        'Numero de telephone',
        'Date de naissance'

    ];
}