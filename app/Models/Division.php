<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    use HasFactory;

    protected $table = "division";
    protected $fillale = ['nombre_division','colaboradores','nivel','embajador','descripcion','divisionsup_id ','estado','created_at','updated_at'];

}
