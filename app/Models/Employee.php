<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable=['company_id','first_name','last_name','email','mobile','amount','designation'];
    public $timestamps = false;

    public function comppany(){
        return $this->belongsTo('App\Models\Company');
    }
}
