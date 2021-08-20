<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    use HasFactory;

    protected $table='roles';
    protected $fillable=['rol','status'];

    public function users()
    {
    	return $this->hasMany('App\Models\Users','rol_id');
    }
}
