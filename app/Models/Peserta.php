<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    use HasFactory;

    protected $table = 'tbl_peserta';

    protected $fillable = [
        'noreg',
        'nama',
        'jk',
        'alamat',
        'agama',
        'asal_sekolah',
        'jurusan',
    ];
}