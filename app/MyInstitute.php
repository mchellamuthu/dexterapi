<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class MyInstitute extends Model
{
    use Uuids;
    public $incrementing = false;
    protected $fillable = ['user_id','institute_id','approved'];
    public function user()
    {
      return $this->belongsTo(User::class);
    }
    public function institute()
    {
      return $this->belongsTo(Institute::class);
    }
    public function users()
    {
      return $this->hasMany(MyInstitute::class,'user_id','id');
    }

}
