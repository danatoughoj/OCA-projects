<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TrainingCenter extends Model
{
    protected $table = "training_centers";
    public $primaryKey = 'center_id';
    public $timestamps = true;

    public function services()
    {
        return $this->hasMany(Service::class, 'center_id', 'center_id');
    }
}
