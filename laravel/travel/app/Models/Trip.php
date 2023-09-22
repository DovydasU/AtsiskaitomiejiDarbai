<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = ['name', 'location', 'space', 'price', 'description', 'contact', 'start', 'end'];
}
