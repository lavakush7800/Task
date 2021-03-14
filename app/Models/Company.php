<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected  $fillable=['image','company_name'];
    public $timestamps = false;

    public function Employee(){
        return $this->hasone('App\Model\Employee');
    }
}
