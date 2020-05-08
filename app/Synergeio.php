<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Synergeio extends Model
{
    protected $table='db_synergeia';
    protected $guarded='id_synergeia';
    public $timestamps = false;
    protected $primaryKey = 'id_synergeia';

    public function pragmatognomosini()
    {
        return $this->belongsToMany('App\Pragmatognomosini','db_synergeia_ekthesis','id_synergeia','id_ekthesis');
    }
}
