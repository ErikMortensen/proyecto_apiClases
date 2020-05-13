<?php

namespace App;

use App\Teacher;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    protected $fillable = [
        'nombre',
        'nivel',
        'precio',
    ];

    public function teachers(){
        return $this->belongsToMany(Teacher::class);
    }
}
