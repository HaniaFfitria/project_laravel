<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;

    protected $fillable =[
        'nim',
        'nama_mahasiswa',
        'foto_mahasiswa',
    ];
}
