<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model implements Authenticatable
{
    use HasFactory;

    /**
     * @var mixed|string
     */

    public $timestamps = false;
    /**
     * @var mixed
     */
    protected $table = 'usuarios';
    protected $fillable  =['nombre','email','password','telefono','tipoUsuario','direccion'];

    public function getAuthIdentifierName()
    {
        return 'nombre';
    }

    public function getAuthIdentifier()
    {
        return $this->nombre;
    }

    public function getAuthPassword()
    {
        return $this->password;
    }

    public function getRememberToken()
    {
        return $this->remember_token;
    }

    public function setRememberToken($value)
    {
        $this->remember_token = $value;
    }

    public function getRememberTokenName()
    {
        return 'remember_token';
    }
}
