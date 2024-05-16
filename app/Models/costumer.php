<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class costumer extends Model
{
    use HasFactory;

    protected $fillable = ['nama','alamat','tanggal','no_hp','merk_mobil','plat_nomor','biaya'];
}
