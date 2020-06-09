<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    //

    public function getServiceBySlug($slug){
    	return $this->where("slug",$slug)->first();
    	//return $this->get();

    }

    public function getAllServices(){
    	return $this->get();

    }
}
