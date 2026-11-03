<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['nama_obat', 'kategori', 'stok', 'harga', 'tanggal_expired'])] 

class Apotek extends Model
{
    /** @use HasFactory<\Database\Factories\ApotekFactory> */
    use HasFactory;
}
