<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ucenik extends Model
{
    use HasFactory;

    protected $table = 'ucenici';

    protected $fillable = [
        'ime', 'datum_rodjenja', 'jmbg',
        'spol', 'grad_id'
    ];
}
