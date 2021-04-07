<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $dates = ['created_at', 'updated_at', 'join_date'];
    protected $fillable = ['user_id', 'first_name', 'last_name', 'join_date'];
    public function user() {
        return $this->belongsTo('App\User');
    }

    public function attendance() {
        return $this->hasMany('App\Attendance');
    }

    public function leave() {
        return $this->hasMany('App\Leave');
    }

}
