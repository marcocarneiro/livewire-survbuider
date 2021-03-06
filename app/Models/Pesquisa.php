<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesquisa extends Model
{
    use HasFactory;
    protected $fillable=['titulo', 'slug', 'pesquisa_inicio', 'pesquisa_final', 'perguntas_por_tela', 'consentimento', 'txt_consentimento'];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function pergunta()
    {
        return $this->hasMany(Pergunta::class);
    }

    public function resultado()
    {
        return $this->hasMany(Resultado::class);
    }

    public function consentimento()
    {
        return $this->hasMany(Consentimento::class);
    }
    public function filtro()
    {
        return $this->hasMany(Filtro::class);
    }

}
