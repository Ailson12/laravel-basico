<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $guarded = ['id'];

    public function curso()
    {
        return $this->hasMany(Curso::class);
    }
}
