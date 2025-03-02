<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Respon extends Model
{
    protected $table = 'respon';
    protected $guarded;

    public function laporan()
    {
        return $this->belongsTo(Laporan::class, 'id_laporan');
    }
    public function respon()
    {
        return $this->hasMany(Respon::class,'id_laporan');
    }

}
