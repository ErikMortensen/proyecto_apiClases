<?php

namespace App;

use App\Teacher;
use App\MateriaTeacher;

use Illuminate\Database\Eloquent\Model;

class Clase extends Model
{
    
    protected $fillable = [
        'fecha',
        'hora',
        'duracion',
        'cant_alumnos',
        'direccion',
        'transaccion',
        'materia_id',
        'teacher_id',
    ];

    // como la clase solo tiene un profesor, se escribe en singular
    public function materiaTeacher(){
        return $this->belongTo(MateriaTeacher::class);
    }
}
