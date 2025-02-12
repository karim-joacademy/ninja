<?php

namespace App\Models;

use Database\Factories\NinjaFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ninja extends Model
{
    protected $fillable = ['name', 'skill', 'bio'];

    /** @use HasFactory<NinjaFactory> */
    use HasFactory;

    public function dojo()
    {
        return $this->belongsTo(Dojo::class);
    }
}
