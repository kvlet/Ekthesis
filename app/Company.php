<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'db_company';

    protected $guarded = ['id_company',
                            'Ypoloipo'];

    public $timestamps = false;
    protected $primaryKey= 'id_company';

    public function pragmatognomosini(){
        return $this->belongsToMany(Pragmatognomosini::class,'db_ekthesis','id_ekthesis');
    }
}
