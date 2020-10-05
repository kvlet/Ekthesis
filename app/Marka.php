<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marka extends Model
{
    protected $table = 'db_markes';

    protected $guarded = ['id_markes'];
    public $timestamps = false;
    protected $primaryKey= 'id_markes';

    public function oximata(){
        return $this->belongsToMany(Oxima::class,'db_oximata','id_oximata');
    }
}
