<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keihi extends Model
{
    use HasFactory;

    /**
     * @var string
     */
    protected $table = 'keihi';

    /**
     * @var array
     */
    protected $fillable = ['title', 'price', 'url'];
}
