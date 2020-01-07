<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhilippineRegion extends Model
{
    public function get_region()
    {
    	return $this->all();
    }
}
