<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;

    protected $primarykey = "id";
    protected $table = "karyawan";
    protected $fillable = ['nama', 'telpon', 'alamat'];

    static function addkaryawan($nama, $telpon, $alamat) {
        $field = [
            "nama" => $nama,
            "telpon" => $telpon,
            "alamat" => $alamat
        ];
        Karyawan::create($field);
    }
}
