<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perusahaan extends Model
{
    use HasFactory;
    public $primarykey ='id_perusahaan';
    protected $fillable = [
        'nama_perusahaan','contact'
    ];
}
