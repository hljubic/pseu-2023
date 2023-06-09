<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rubrika extends Model
{
    use HasFactory;

    protected $table = 'rubrike';

    protected $fillable = ['naziv', 'opis'];
}
