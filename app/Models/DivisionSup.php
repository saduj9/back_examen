<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DivisionSup extends Model
{
    protected $table = "divisionsuperior";
    use HasFactory;
    protected $fillale = ['nombre_divisionsup','estado','created_at','updated_at'];
}
