<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExpensesOxima extends Model
{
    protected $table = 'db_expenses_oxima';

    protected $guarded = ['id_expenses_oxima'];

    public $timestamps = false;
    protected $primaryKey= 'id_expenses_oxima';

    public function expen()
    {
        return $this->hasOne(ExpenOxima::class,'id_expen_oxima','id_expen_oxima');
    }
}
