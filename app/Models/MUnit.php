<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;
class MUnit extends Model
{
    use HasUuids, SoftDeletes;

    protected $table = 'm_units';

    protected $fillable = [
        'name_unit',
        'type_unit',
        'lt_unit',
        'luas_tanah_unit',
        'luas_bangunan_unit',
        'deskripsi_1_unit',
        'deskripsi_2_unit',
        'deskripsi_3_unit',
        'deskripsi_4_unit',
        'deskripsi_5_unit',
        'deskripsi_6_unit',
        'gambar_unit',
    ];

    public function getGambarUnitUrlAttribute()
    {
        return $this->gambar_unit 
            ? Storage::url($this->gambar_unit) 
            : null;
    }
}