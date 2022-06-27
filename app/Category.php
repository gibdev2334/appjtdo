<?php

namespace App;

use App\Vestige;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';


    public function vestiges() {
        return $this->hasMany('App\Vestige');
    }

}
