<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function companyTypes()
    {
        return $this
            ->belongsToMany('App\CompanyType')
            ->withTimestamps();
    }

    public function citys()
    {
        return $this
            ->belongsToMany('App\City')
            ->withTimestamps();
    }

    public function users()
    {
        return $this
            ->belongsToMany('App\User')
            ->withTimestamps();
    }
}
