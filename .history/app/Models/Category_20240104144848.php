<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table ='loaisanpham';
    protected $primaryKey ='id_masp';
    protected $fillable = ['id_masp','tenloaisanpham','id_thuonghieu'];
}
