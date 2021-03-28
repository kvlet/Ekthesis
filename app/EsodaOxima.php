<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EsodaOxima extends Model
{
    protected $table = 'db_esoda_oximatos';

    protected $guarded = ['id_esoda_oximatos'];

    public $timestamps = false;
    protected $primaryKey= 'id_esoda_oximatos';

    public function accident_place(){
        return $this->hasOne(Accedent_place::class,'id_accident_place','id_accedent_place');
    }
    public function company(){
        return $this->hasOne(Company::class,'id_company','id_company');
    }
    public function ekthesi(){
        return $this->hasOne(Pragmatognomosini::class,'id_ekthesis','id_ekthesis');
    }
}
