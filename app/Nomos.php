<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nomos extends Model
{
    protected $table = 'db_nomoi';

    protected $guarded = ['id_nomoi'];
    public $timestamps = false;
    protected $primaryKey= 'id_nomoi';

    public function pragmatognomosini(){
        return $this->belongsToMany(Pragmatognomosini::class,'db_ekthesis','id_ekthesis');
    }
}
