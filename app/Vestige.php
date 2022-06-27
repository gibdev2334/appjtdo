<?php

namespace App;

use App\Category;
use Illuminate\Database\Eloquent\Model;

class Vestige extends Model
{
    public function categoyId() {
        // public function category() {
        return $this->hasMany('App\Category');
    }
}
