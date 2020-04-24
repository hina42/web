<?php

namespace App;

use App\privilege;

use Illuminate\Database\Eloquent\Model;

class statuse extends Model
{
  protected $hidden = ['created_at','updated_at','remember_token'];
    public $timestamps = false;
    protected $guarded = [];
    protected $primaryKey = 'statusID';
  //  protected $fillable = ['edit', 'delete', 'view','privilegeID'];

    public function privilege()
    {
        return $this->belongsTo(privilege::class, 'privilegeID','privilegeID');
    }

}