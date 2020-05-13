<?php

namespace App;

use App\Materia;
use App\User;

class Teacher extends User
{
    

    protected $fillable = [
        'titulo',
        'descripcion',
        'zona',
        'user_id',
    ];


    public function estaDisponible(){}


    public function materias(){
        return $this->belongsToMany(Materia::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
