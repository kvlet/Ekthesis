<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pragmatognomosini extends Model
{
    protected $table = 'db_ekthesis';

    protected $guarded = [];


    public function pragmatognomonas(){
        return $this->hasOne(User::class);
    }


    public function grafeio(){
    	return $this->hasOne(Grafeio::class);
    }
}
