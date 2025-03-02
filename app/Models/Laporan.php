<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    protected $table = 'laporan';
    protected $guarded;

    protected $casts = ['tanggal_pengaduan' => 'datetime'];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function respon()
    {
        return $this->hasMany(Respon::class, 'id_laporan');
    }
}
