<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'Nama',
        'Nama_Alm',
        'Alamat',
        'No_ktp',
        'No_Kk',
        'No_telepon',
        'Email',
    ];
}
