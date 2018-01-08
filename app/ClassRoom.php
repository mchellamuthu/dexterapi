<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassRoom extends Model
{
  use Uuids;
  public $incrementing = false;
  protected $fillable = ['user_id','institute_id','approved','class_room_id'];
  public function user()
  {
    return $this->belongsTo(User::class);
  }
  public function institute()
  {
    return $this->belongsTo(Institute::class);
  }

  public function classroom()
  {
    return $this->belongsTo(ClassRoom::class);
  }
  public function teachers()
  {
    
  }




}
