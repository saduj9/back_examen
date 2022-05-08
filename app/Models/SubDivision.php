<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubDivision extends Model
{
    use HasFactory;

    protected $table = "subdivision";
    protected $fillale = ['nombre_subdivision','descripcion','division_id ','estado','created_at','updated_at'];
}
