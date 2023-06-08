<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;
    protected $table = 'pasiens';

    protected $fillable = ['no_rm', 'nama', 'tgl_lahir', 'no_telp', 'alamat'];
}
