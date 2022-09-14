<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Melding extends Model
{
    public $table = 'meldingen';

    use HasFactory;

    protected $fillable = [
        'name', 'detail'
    ];
}
