<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perkuliahan extends Model
{
    use HasFactory;
    protected $filable = ['mahasiswa_id', 'dosen_id', 'matakuliah_id'];

    public function mahasiswa()
    {
        return $this->helongsTo(Mahasiswa::class);
    }

    public function dosen()
    {
        return $this->belongsTo(Dosen::class);
    }

    public function matakuliah()
    {
        return $this->belongsTo(Matakuliah::class);
    }
}

