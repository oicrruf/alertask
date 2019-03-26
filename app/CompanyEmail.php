<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyEmail extends Model
{
    public function companys()
    {
        return $this
            ->belongsToMany('App\Company')
            ->withTimestamps();
    }
}
