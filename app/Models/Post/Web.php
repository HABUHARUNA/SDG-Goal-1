<?php

namespace App\Models\Post;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Web extends Model
{
    use HasFactory;
    protected $table = 'webs';
    protected $fillable = [
        'title',
        'file',
        'description',
    ];
}
