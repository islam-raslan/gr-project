<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'products';
    protected $timestamp = true;
    use HasFactory;
}
