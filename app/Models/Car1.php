<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car1 extends Model
{
    use HasFactory;
    protected $table = 'cars';
    protected $fillable = ['mode','brand','color','mdate'];
}
