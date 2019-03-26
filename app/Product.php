<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function companys()
    {
        return $this
            ->belongsToMany('App\Company')
            ->withTimestamps();
    }

    public function productTypes()
    {
        return $this
            ->belongsToMany('App\ProductType')
            ->withTimestamps();
    }
}
