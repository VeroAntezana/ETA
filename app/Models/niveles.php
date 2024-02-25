<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class niveles extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
    ];
    public function niveles()
        {
            return $this->hasMany(Niveles::class);
        }
}
