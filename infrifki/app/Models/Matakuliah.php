<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    use HasFactory;
    protected $filable = ['nama', 'kode', 'sks'];

    public function perkuliahans()
    {
        return $this->hasMany(Perkuliahan::class);
    }
}
