<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = [
        'title_uz',
        'title_ru',
        'title_us',
        'text_uz',
        'text_ru',
        'text_us',
        'file',
        'image',
        'eye',
    ];
}
