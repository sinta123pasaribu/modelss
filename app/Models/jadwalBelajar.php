<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalBelajar extends Model
{
    use HasFactory;

    protected $table = 'jadwal_belajar';

    protected $fillable = [
        'hari',
        'jam_mulai',
        'jam_selesai',
        'kelas',
        'mata_pelajaran',
        'guru',
    ];
}