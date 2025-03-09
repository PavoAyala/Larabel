<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaterialDidactico extends Model
{
    use HasFactory;

    protected $fillable = ['tipo', 'enlace', 'curso_id'];

    public function curso()
    {
        return $this->belongsTo(Curso::class);
    }
}