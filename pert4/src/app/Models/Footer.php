<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Footer extends Model
{
    use HasFactory;
    protected $table = 'footers';
    protected $fillable = [
        'section',
        'url',
        'label',
        'order',
    ];
}
