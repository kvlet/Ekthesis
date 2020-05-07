<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PartsOfErgasies extends Model
{
    protected $table = 'db_parts_of_ergasies';

    protected $guarded = [
        'id_ergasies',
        'id_parts'
    ];

    protected $primaryKey= [
        'id_ergasies',
        'id_parts'
    ];

    public function ergasies_in_parts(){
        return $this->hasMany(Ergasies::class,'id_ergasies');
    }

    public  function parts_in_ergasies(){
        return $this->hasMany(Parts::class,'id_parts');
    }

}
