<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grafeio extends Model
{
	protected $table = 'db_grafeio';

	protected $guarded = ['id_grafeio'];

	protected $primaryKey= 'id_grafeio';

    public function pragmatognomosini(){
        return $this->belongsToMany(Pragmatognomosini::class,'db_ekthesis','id_ekthesis');
    }
}
