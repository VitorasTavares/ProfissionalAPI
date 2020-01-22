<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tecnologia extends Model
{
    //
    protected $table = "Tecnologias";
    public function profissionais(){
        return $this->belongsToMany('App\Profissionais', 'profissionais_tecnologia', "tecnologia_id", "profissional_id");
    }
}
