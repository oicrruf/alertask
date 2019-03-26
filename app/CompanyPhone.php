<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyPhone extends Model
{
    public function phoneTypes()
    {
        return $this
            ->belongsToMany('App\PhoneType')
            ->withTimestamps();
    }

    public function companys()
    {
        return $this
            ->belongsToMany('App\Company')
            ->withTimestamps();
    }
}
