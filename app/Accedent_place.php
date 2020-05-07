<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accedent_place extends Model
{
    protected $table = 'db_accident_place';

    protected $guarded = ['id_accident_place'];
    public $timestamps = false;
    protected $primaryKey= 'id_accident_place';

    public function pragmatognomosini(){
        return $this->belongsToMany(Pragmatognomosini::class,'db_ekthesis','id_ekthesis');
    }
}
