<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Laravel\Lumen\Auth\Authorizable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Foundation\Auth\Access\Authorizable as AccessAuthorizable;

class usuario extends Model implements AuthenticatableContract,AuthorizableContract
{
    use Authenticatable,AccessAuthorizable;

    protected $connection = 'pgsql';
    protected $table = 'usuario';
    protected $primaryKey = 'codigousuario';
    // public $incrementing = false;
    public $timestamps = false;
}