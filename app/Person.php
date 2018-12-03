<?php

namespace App;

use App\Scopes\ScopePerson;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $guarded = array('id');
    public static $rules = array(
        'name' => 'required',
        'mail' => 'email',
        'age' => 'integer|min:0|max:150'
    );

    protected static function boot()
    {
        parent::boot();

//        static::addGlobalScope('age', function (Builder $builder) {
//            $builder->where('age', '>', 20 );
//        });
        static::addGlobalScope(new ScopePerson);
    }

    public function getData()
    {
        return $this->id . ':' . $this->name . '(' . $this->age . ')';
    }

    public function scopeNameEqual($query, $str)
    {
        return $query->where('name', $str);
    }
}
