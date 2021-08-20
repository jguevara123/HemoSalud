<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Files extends Model
{
    use HasFactory;

    protected $table='files';
    protected $fillable=['id','name','extension','patient_id','status'];

    public function patient()
    {
        return $this->belongsTo('App\Models\Patient','patient_id');
    }

}
