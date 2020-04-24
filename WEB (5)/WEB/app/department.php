<?php

namespace App;

use App\employee;
use App\role;
use Illuminate\Database\Eloquent\Model;

class department extends Model
{protected $hidden = ['created_at','updated_at','remember_token'];
    public $timestamps=false;
    protected $guarded=[];
    protected $primaryKey = 'departmentID';
    //protected $fillable= ['departmentName'];

//    public  function role()
//	{
//	return $this->hasMany(role::class);
//	}
//    public  function employees()
//    {
//        return $this->hasMany(employee::class);
//    }
//


    public  function role()
    {
        return $this->hasOne(role::class,'departmentID','departmentID');
    }







}