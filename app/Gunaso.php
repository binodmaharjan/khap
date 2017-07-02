<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gunaso extends Model
{

    protected $table = 'gunaso';
    protected $fillable =['full_name','email','phone','type','subject','message'];
}
