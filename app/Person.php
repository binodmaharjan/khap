<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table = "person_details";

    protected $fillable =['name','name_np', 'birth_date','phone', 'email', 'gender','health','occupation','address','education' ];

    public function setBirthDateAttribute($value)
    {
        $this->attributes['birth_date'] = Carbon::now()->format('Y') - $value;
    }

    public function Age()
    {
        return Carbon::now()->format('Y') - $this->birth_date;
    }

    public function family()
    {
        return $this->hasMany('App\Family','person_id', 'id');
    }

    public function RelativeNames()
    {
        $name = '';
        $family = $this->family;
        foreach($family as $row)
        {
            
            $rel = Person::find($row->relative_id);
            if(!$rel)
            {
                continue;
            }
            $name .=  $rel->name . ', ';
        }

        return $name;
    }
}
