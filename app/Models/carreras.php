<?php

namespace App\Models;
use App\Models\Niveles;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class carreras extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'niveles_id',
        'duracion'
        
        
    ];

    public function niveles()
    {
        return $this->belongsTo(Niveles::class,'niveles_id');
    }
}
