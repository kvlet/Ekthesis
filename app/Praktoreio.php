<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Praktoreio extends Model
{
    protected $table = 'db_praktoreio';
    protected $guarded = ['id_praktoreio',
                           'flag'
    ];
    public $timestamps = false;
    protected $primaryKey = 'id_praktoreio';

    public function pragmatognomosini()
    {
        return $this->belongsToMany('App\Pragmatognomosini','db_praktoreio_ekthesis','id_praktoreio','id_ekthesis');
    }
}
