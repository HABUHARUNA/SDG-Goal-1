<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Baking extends Model
{
    use HasFactory;
    protected $table = 'bakings';
    protected $fillable = [
        'title',
        'file',
        'description',
    ];
}
