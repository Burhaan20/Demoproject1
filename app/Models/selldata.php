<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class selldata extends Model
{
    use HasFactory;
    protected $table='selldatas';
    public function category()
    {
        return $this->belongsTo(category::class,'tid','id');
    }
}
