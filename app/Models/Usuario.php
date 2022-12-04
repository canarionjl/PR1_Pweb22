<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
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

}
