<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class amind extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'admins';
    protected $timestamp = true;
    use HasFactory;
}
