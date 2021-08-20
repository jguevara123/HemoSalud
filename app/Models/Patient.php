<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $table='patients';
	protected $fillable=['name','nacionality','ci','birth','status','created_at'];
	protected $with =['files'];

    public function files()
    {
        return $this->hasMany('App\Models\Files','patient_id');
    }
}