<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TableCat extends Model
{
    protected $guarded = ['cat_id'];

    public function parent()
    {
        return $this->belongsTo('App\Models\TableCat', 'parent');
    }

    public function children()
    {
        return $this->hasMany('App\Models\TableCat', 'parent');
    }
}
