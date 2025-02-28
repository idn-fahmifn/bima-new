<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tempat extends Model
{
    protected $table = 'tempat';
    protected $guarded;

    public function barang()
    {
        return $this->hasMany(Barang::class, 'id_tempat');
    }

}
