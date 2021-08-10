<?php

namespace App;


use app\Htpp\Controllers\mahasiswaController;
use Illuminate\Database\Eloquent\Model;

class mahaiswa_Model extends Model
{
    protected $table = 'mahasiswa';

    protected $fillable=['Id', 'nama', 'jurusan', 'email'];
}
