<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $guarded = ['id'];

    public function alunos()
    {
        return $this->belongsToMany(Aluno::class);
    }
}
