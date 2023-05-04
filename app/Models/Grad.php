<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grad extends Model
{
    use HasFactory;

    protected $table = 'gradovi';

    protected $fillable = ['naziv', 'postanski_broj'];

    public function ucenici()
    {
        return $this->hasMany(Ucenik::class, 'grad_id');
    }
}
