<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Baby extends Model
{
    protected $fillable = ['name', 'birthday','image'];
}
