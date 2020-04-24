<?php

namespace App;
use App\statuse;
use App\role;
use Illuminate\Database\Eloquent\Model;

class privilege extends Model
{protected $hidden = ['created_at','updated_at','remember_token'];
    public $timestamps=false;
    protected $guarded=[];
    protected $primaryKey = 'privilegeID';
    //protected $fillable = ['privilageName','roleID'];

    public  function statuse()
    {
        return $this->hasOne(statuse::class,'privilegeID','privilegeID');
    }
//
//    public  function statuse()
//	{
//		return $this->hasMany(statuse::class);
//    }
   public  function role()
    {
       return $this->belongsTo(role::class,'roleID','roleID');
    }
}