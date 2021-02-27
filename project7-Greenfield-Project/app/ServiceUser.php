<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceUser extends Model
{
    protected $table = "service_user";
    public $primaryKey = "service_user_id";
    public $timestamps = true;
}
