<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demande extends Model
{
    use HasFactory;
    protected $fillable = [
        'idUser' ,
            'receve',
            'amount',
            'description',
            'devise',
            'delai' ,
            'statut',

        'desactivated_by',
        'desactivated_at',
    ];
}
