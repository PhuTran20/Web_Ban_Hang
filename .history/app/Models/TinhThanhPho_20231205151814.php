<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TinhThanhPho extends Model
{
    use HasFactory;
    protected $table = 'tbl_tinhthanhpho';
    protected $primaryKey = "maqh";
    protected $fillable = ['maqh,name,type,matp'];
    public $timestamps = false;
}