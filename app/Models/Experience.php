<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;
    
    protected $guarded = []; // Ini mengizinkan kita mengisi data tanpa error "Add [field] to fillable"
}