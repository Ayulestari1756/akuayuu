<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dosen extends Model
{
    use HasFactory;
    public $table = 'dosen';
    protected $fillable = [
        'nip',
        'nama',
        'telepon',

    ];
}
