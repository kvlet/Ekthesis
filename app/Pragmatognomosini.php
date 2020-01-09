<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pragmatognomosini extends Model
{
    protected $table = 'db_ekthesis';

    protected $guarded = ['id_ekthesis', 'File_position'];


    public function pragmatognomonas()
    {
        return $this->hasOne(User::class);
    }


    public function grafeio()
    {
        return $this->hasOne(Grafeio::class);
    }

    public function nomoi()
    {
        return $this->hasOne(Nomoi::class);
    }

    public function diakrisi()
    {
        return $this->hasOne(Diakrisi::class);
    }

}
