<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Xrisi extends Model
{
    protected $table = 'db_xrisi';

    protected $guarded = ['id_xrisi'];
    public $timestamps = false;
    protected $primaryKey= 'id_xrisi';

    public function oximata(){
        return $this->belongsToMany(Oxima::class,'db_oximata','id_oximata');
    }
}
