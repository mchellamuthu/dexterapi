<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Institute extends Model
{
    use SoftDeletes;
    use Uuids;
    public $incrementing = false;
    protected $fillable =  ['name','address','city','state','country','type','icon'];

    public function admin()
    {
        return $this->belongsTo(User::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class,'my_institutes')->withPivot(['id','approved'])->withTimestamps();
    }


}
