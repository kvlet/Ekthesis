<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parts extends Model
{
    protected $table = 'db_parts';

    protected $guarded = ['id_parts'];

    protected $primaryKey= 'id_parts';

    public function parts_in_ergasies(){
        return $this->belongsToMany(PartsOfErgasies::class);
    }
}
