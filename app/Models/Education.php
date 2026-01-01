<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    // KITA PAKSA LARAVEL MENGGUNAKAN TABEL JAMAK
    protected $table = 'educations';

    // Izinkan semua kolom diisi (Mass Assignment)
    protected $guarded = [];
}