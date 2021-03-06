<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Arxi_ekdosis_eggrafon extends Model
{
    protected $table = 'db_arxi_ekdosis_eggrafon';

    protected $guarded = ['id_Arxi_ekdosis_eggrafon'];
    public $timestamps = false;
    protected $primaryKey= 'id_Arxi_ekdosis_eggrafon';

    public function pragmatognomosini(){
        return $this->belongsToMany(Pragmatognomosini::class,'db_ekthesis','id_ekthesis');
    }

}
