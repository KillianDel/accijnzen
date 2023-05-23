<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cursus extends Model
{
    use HasFactory;
    protected $table = 'cursus';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'priority', 'subject', 'description', 'price', 'photo'];
}
