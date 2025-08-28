<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unvan extends Model
{
    use HasFactory;

    protected $table = 'unvanlar';

    protected $fillable = [
        'unvan_adi',
    ];
}
