<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function prodaucts()
    {
        return $this->hasMany("App\Product");
    }
}
