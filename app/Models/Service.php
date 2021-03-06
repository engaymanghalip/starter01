<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = "services";
    protected $fillable = ['name', 'created_at', 'updated_at'];
    protected $hidden = ['created_at', 'updated_at','pivot'];
    public $timestamps = true;

    public function doctorsRelation()
    {
        return $this->belongsToMany('App\Models\Doctor', 'doctors_services', 'service_id', 'doctor_id', 'id', 'id');

    }
}
