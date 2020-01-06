<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grafeio extends Model
{
	protected $table = 'db_grafeio';

	protected $guarded = ['id_grafeio'];

	protected $primaryKey= 'id_grafeio';
}
