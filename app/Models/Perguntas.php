<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perguntas extends Model
{
    use HasFactory;
    protected $fillable = [
        'grau',
        'pergunta',
        'opcaoa',
        'opcaob',
        'opcaoc',
        'opcaod',
        
    ];
}
