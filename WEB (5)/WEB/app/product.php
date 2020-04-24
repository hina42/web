<?php

namespace App;
use App\yard;
use App\color;
use App\description;
use App\size;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{protected $hidden = ['created_at','updated_at','remember_token'];
    public $timestamps = false;
    protected $table='products';
    protected $primaryKey ="ProductID";
    protected $fillable=["ProductName","SubCatID","YardID","SizeID","ColorID","DescriptionID","ProductPrice","Image"];

    public function yard()
    {
        return $this->hasOne(yard::class,'YardID',"YardID");
    }
    public function color()
    {
        return $this->hasOne(color::class,'ColorID',"ColorID");
    }
    public function description()
    {
        return $this->hasOne(description::class,'DescriptionID',"DescriptionID");
    }
    public function size()
    {
        return $this->hasOne(size::class,'SizeID',"SizeID");
    }

}
