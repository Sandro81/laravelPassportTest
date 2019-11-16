<?php

namespace App;

use Laravel\Passport\HasApiTokens;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


/*C:\laragon\www\apiAutentication>php artisan passport:install
Encryption keys generated successfully.
Personal access client created successfully.
Client ID: 1
Client secret: iHWu7amR4PKNV0BwmGL9NU4q0ewdpgDQX2frcNzD
Password grant client created successfully.
Client ID: 2
Client secret: M1tBNY3FKTzuaraJRPvXx1FjWdFGoxl7pnC7iXMv
*/

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
