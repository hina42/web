<?php

namespace App;
use App\department;
use App\privilege;
use App\employee;

use Illuminate\Database\Eloquent\Model;

class role extends Model
{protected $hidden = ['created_at','updated_at','remember_token'];
    public $timestamps = false;
    protected $guarded = [];
    protected $primaryKey = 'roleID';
   // protected $fillable = ['roleName','departmentID'];

    public  function privilege()
    {
        return $this->hasOne(privilege::class,'roleID','roleID');
    }
    public  function department()
    {
        return $this->belongsTo(department::class,'departmentID','departmentID');
    }
    /* public  function privilege()
     {
     return $this->hasMany(privilege::class);
     }

     public  function employee()
     {
         return $this->hasMany(employee::class);
     }
     public  function department()
     {
         return $this->belongsTo(department::class);
     }*/



}