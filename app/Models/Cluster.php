<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cluster extends Model
{
    use HasFactory;
   protected $fillable = [
        'nom',
        'filiere_id',
        'village_id'
        
    ];
    public function filiere(){
        return $this->belongsTo(Filiere::class);
    }
    public function village()
    {
        return $this->belongsTo(Village::class,'village_id','id');
    }
}
