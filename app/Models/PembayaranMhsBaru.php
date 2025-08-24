<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PembayaranMhsBaru extends Model
{
    protected $table = 'pembayaran_mhs_baru';

    protected $guarded = ['id'];

    public function tahunAkademik()
    {
        return $this->hasOne(TahunAkademik::class, 'id', 'thn_akademik_id');
    }

    public function semester()
    {
        return $this->hasOne(Semester::class, 'id', 'semester_id');
    }

    public function tingkat()
    {
        return $this->hasOne(Tingkat::class, 'id', 'tingkat_id');
    }

    public function prodi()
    {
        return $this->hasOne(Prodi::class, 'id', 'prodi_id');
    }

    public function konsentrasi()
    {
        return $this->hasOne(Konsentrasi::class, 'id_konsentrasi', 'konsentrasi_id');
    }

}
