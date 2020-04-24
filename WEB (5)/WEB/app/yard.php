<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class yard extends Model
{protected $hidden = ['created_at','updated_at','remember_token'];
    public $timestamps = false;
    protected $fillable = ['SubCatID','Min','Max'];
    protected $primaryKey = 'YardID';
}
