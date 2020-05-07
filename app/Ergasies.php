<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ergasies extends Model
{
    protected $table = 'db_ergasies';

    protected $guarded = ['id_ergasies'];

    protected $primaryKey= 'id_ergasies';

    public function ergasies_in_parts(){
        return $this->belongsToMany(PartsOfErgasies::class,'db_parts_of_ergasies','id_ergasies','id_parts');
    }
}
