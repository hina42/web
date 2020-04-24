<?php

namespace App;
use App\yard;
use App\size;
use App\color;
use App\description;
use App\subcategory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $primaryKey = "ProductID";
    protected $fillable = ['ProductName','ProductPrice'];
    public function yard(){
     return $this->hasMany(yard::class, "YardID","YardID");
    }
    public function size(){
        return $this->hasMany(size::class, "SizeID","SizeID");
       }
       public function description(){
        return $this->hasMany(description::class, "DescriptionID","DescriptionID");
       }
     
       public function color(){
        return $this->hasMany(Color::class, "ColorID","ColorID");
       }  
}
