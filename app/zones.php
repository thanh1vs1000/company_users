<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class zones extends Model
{
    protected $table = 'zones';
    public function jobs_zone(){
        return $this->hasMany('App\jobs','id_zone','id');
    }
    public function companys_zone(){
        return $this->hasMany('App\company_users','id_zone','id');
    }
}
