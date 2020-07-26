<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class company_users extends Model
{
    protected $table = 'company_users';
    protected  $fillable =[
        'name','password','email','password','address','avatar','scales','province','website','status','credit','desc'
    ];
    public  function zones(){
        return $this->belongsTo('App\zones','id_zone','id');
    }
}
