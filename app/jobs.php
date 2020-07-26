<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jobs extends Model
{
    protected $table = 'jobs';
    protected  $fillable =[
        'job_name','slug_name','images','company_user_id','job_category_id','id_zone','address','deadline_job','amount_people','formality','experience',
        'gender','job_desc','salary','interest','status','request','email_get_cv'
    ];
    public  function job_categories(){
        return $this->belongsTo('App\job_categories','job_category_id','id');
    }
    public  function zones(){
        return $this->belongsTo('App\zones','id_zone','id');
    }
}
