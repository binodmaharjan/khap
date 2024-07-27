<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    private $western_number = array('0','1','2','3','4','5','6','7','8','9');
    private $nepali_number = array('०','१','२','३','४','५','६','७','८','९');

    protected $table = "person_details";

    protected $fillable =['name','name_np', 'birth_date','phone', 'email', 'gender','health','occupation','address','education' ];

    public function setBirthDateAttribute($value)
    {
        $this->attributes['birth_date'] = Carbon::now()->format('Y') - $value;
    }

    public function Age()
    {
        $age =  Carbon::now()->format('Y') - $this->birth_date;
        return  str_replace($this->western_number, $this->nepali_number, $age);
    }

    public function Gender()
    {
        if($this->gender=='MALE')
        {
            return 'पुरुष';
        }
        return "महिला";
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
