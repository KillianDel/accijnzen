<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publicatie extends Model
{
    use HasFactory;
    protected $table = 'publicatie';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'subject', 'path'];
}
