<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class MateriaTeacher extends Pivot
{
    
    
    public function clases(){
        return $this->belongsTo(Clase::class);
    }
}
