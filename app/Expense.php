<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    protected $table = 'db_expenses';

    protected $guarded = ['id_expenses'];

    public $timestamps = false;
    protected $primaryKey= 'id_expenses';
}
