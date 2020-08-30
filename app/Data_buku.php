<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Data_buku extends Model
{
    protected $table = 'data_buku';
    public $timestamps = false;
    //lanjutan create cara ke 2 dengan mass assignment
    protected $fillable = ['judul', 'pengarang', 'penerbit', 'tahun'];
}
