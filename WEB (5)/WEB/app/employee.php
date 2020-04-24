<?php

namespace App;
use App\department;
use App\role;
use App\address;
use Illuminate\Database\Eloquent\Model;


class employee extends Model
{
    protected $hidden = ['created_at','updated_at','remember_token'];
    public $timestamps=false;
    protected $guarded=[];
    protected $primaryKey = 'employeeID';
   // protected $fillable = ['firstName','lastName','email','password','phone','gender','roleID','departmentID'];


//    public  function address()
//	{
//		return $this->hasMany(address::class);
//	}
//
//
//	public  function department()
//	{
//		return $this->belongsToMany(department::class);
//	}
//
//    public  function role()
//    {
//        return $this->belongsToMany(role::class);
//    }


   public  function address()
    {
        return $this->hasOne(address::class,'employeeID','employeeID');
    }

    public  function department()
    {
        return $this->belongsTo(department::class,'departmentID','departmentID');
    }

    public  function role()
    {
        return $this->belongsTo(role::class,'roleID','roleID');
    }

}