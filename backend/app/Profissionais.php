<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\tecnologia;

class Profissionais extends Model
{

    protected $table = "profissionais";
    
    public function tecnologias(){
        return $this->hasManyMany('App\Tecnologia', 'profissionais_tecnologia', "tecnologia_id", "profissional_id");
    }
}
