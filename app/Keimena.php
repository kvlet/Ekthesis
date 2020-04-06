<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keimena extends Model
{
    protected $table = 'db_keimena';
    protected $guarded = ['id_keimena'];
    public $timestamps = false;
    protected $primaryKey = 'id_keimena';

    public function pragmatognomosini()
    {
        return $this->belongsToMany(Pragmatognomosini::class);
    }
}
