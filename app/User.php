<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'nome', 'email', 'senha',
    ];

    protected $hidden = [
        'senha', 'remember_token',
    ];

    public static function authenticate($email, $senha)
    {
        $user = User::where('email', $email)->first();
        if (!Hash::check($senha, $user->senha)) {
            return false;
        }
        return $user;
    }

    public function setPasswordAttribute($senha)
    {
        $this->attributes['senha'] = Hash::make($senha);
    }
}
