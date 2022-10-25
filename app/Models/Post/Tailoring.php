<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tailoring extends Model
{
    use HasFactory;
    protected $table = 'tailorings';
    protected $fillable = [
        'title',
        'file',
        'description',
    ];
}
