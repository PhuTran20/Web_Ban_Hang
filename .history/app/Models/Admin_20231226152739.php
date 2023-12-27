<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $table = 'admin';
     protected $primaryKey = 'id_admin'; 
     public $timestamps = false;
    public $fillable =['id_admin','user_admin','name_Admin','password','phone','email','chucvu'];
}
