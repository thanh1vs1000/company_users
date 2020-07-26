<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class job_categories extends Model
{
    protected $table = 'job_categories';
    protected  $fillable =[
        'job_category_name'
    ];
    public function jobs(){

        return $this->hasMany('App\jobs','job_category_id','id');
    }
}
