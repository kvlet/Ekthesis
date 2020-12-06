<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parts extends Model
{
    protected $table = 'db_parts';

    protected $guarded = ['id_parts'];
    public $timestamps = false;
    protected $primaryKey= 'id_parts';

    public function parts_in_ergasies(){
        return $this->belongsToMany('App\Ergasies','db_parts_of_ergasies','id_parts','id_ergasies');
    }
}
