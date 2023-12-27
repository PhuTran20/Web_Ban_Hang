<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bike extends Model
{
    use HasFactory;
    protected $table ='bike';
    protected $primaryKey = 'id_bike';
    protected $fillable = ['id_bike',]
}
