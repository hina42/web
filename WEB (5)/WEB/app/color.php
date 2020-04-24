<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class color extends Model
{protected $hidden = ['created_at','updated_at','remember_token'];
    public $timestamps = false;
    protected $primaryKey='ColorID';
    protected $fillable=['SubCatID','Color'];
}
