<?php

namespace App\Models;

use App\Models\kategori;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class barang extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function kategori(){

        return $this->belongsTo(kategori::class, 'category_id');

    }
}
