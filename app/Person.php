<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table = 'db_person';

    protected $guarded = ['id_person','Age','Flag'];
    public $timestamps = false;
    protected $primaryKey= 'id_person';

    public function pragmatognomosini(){
        return $this->belongsToMany(Pragmatognomosini::class,'db_ekthesis','id_ekthesis');
    }
}
