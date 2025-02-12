<?php

namespace App\Models;

use Database\Factories\DojoFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dojo extends Model
{
    /** @use HasFactory<DojoFactory> */
    use HasFactory;

    protected $fillable = ['name', 'location', 'description'];

    public function ninjas()
    {
        return $this->hasMany(Ninja::class);
    }
}
