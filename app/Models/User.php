<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'pseudo',
        'email',
        'password',
        'role',
        'type_compte',
        'dateAnnif',
        'adresse',
        'solde',
        'photo',
        'telephoneUser',
        'lastname',
        'firstname',

        'nameSociete',
        'adresseSociete',
        'telephoneSociete',
        'serviceSociete',
        //
        'language',
        'currency',

        'quiz1_id',
        'answer1',
        'quiz2_id',
        'answer2',
        'quiz3_id',
        'answer3',
        //
        'typeSociete',
        'carte_identity',
        'rcommerce',
        'pro_verified',
        //

        'is_active',
        'admin_can_active_account',
        'desactivated_by',
        'desactivated_at',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
