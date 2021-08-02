<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
    protected $table = "person_family";

    protected $fillable =['person_id','relative_id', 'relationship'];

    public function Relative()
    {
        return $this->belongsTo('App\Person', 'relative_id','id');
    }

}
