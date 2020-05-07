<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oxima extends Model
{
    protected $table = 'db_oximata';

    protected $guarded = ['id_oximata','Flag'];

    protected $primaryKey= 'id_oximata';

    public function pragmatognomosini(){
        return $this->belongsToMany(Pragmatognomosini::class,'db_ekthesis','id_ekthesis');
    }

}
