<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diakrisi extends Model
{
    protected $table = 'db_diakrisi';

    protected $guarded = [];
    public $timestamps = false;
    protected $primaryKey= 'id_diakrisi';
    public $incrementing = false;
    protected $keyType = 'string';

    public function pragmatognomosini(){
        return $this->belongsToMany(Pragmatognomosini::class,'db_ekthesis','id_ekthesis');
    }
}
