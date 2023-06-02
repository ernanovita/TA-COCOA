<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelAbsen extends Model
{
    use HasFactory;
    protected $fillable = ['id_kelas', 'id_guru', 'tanggal', 'bulan', 'tahun'];
}
