<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    use HasFactory;

            /** Relación 1:n de Usuario a contactos */
            public function contactos()
            {
                return $this->hasMany(Contacto::class);
            }
}
