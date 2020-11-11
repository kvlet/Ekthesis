<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'db_company';

    protected $guarded = ['id_company',
                            'Ypoloipo'];

    public $timestamps = false;
    protected $primaryKey= 'id_company';

    public function pragmatognomosini(){
        return $this->hasMany(Pragmatognomosini::class,'id_ekthesis','id_company');
    }

    public function departments(){
        return $this->belongsToMany('App\Department','db_company_dept','id_company','id_department')->withPivot('phone','Fax','Email','Respon');
    }

    public function price_list(){
        return $this->belongsToMany('App\Expense','db_company_price','id_company','id_expenses')->withPivot('price');
    }
}
