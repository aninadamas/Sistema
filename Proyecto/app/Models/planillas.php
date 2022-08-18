<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class planillas extends Model
{
    use HasFactory;
    protected $fillable = ['id_funcionario','nombre','dependencia','sede',
                                'motivo','fecha_inicio','fecha_fin','hora_inicio','hora_fin',
                                                'obs','estado'

    ];
}
