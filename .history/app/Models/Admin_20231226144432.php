<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $table = 'admin';
    protected



    // protected $table = 'user';
    // protected $primaryKey = "id_user";
    // public $timestamps = false;
    // protected $fillable = [
    //     'id_user',
    //     'username',
    //     'password',
    //     'fullName',
    //     'birthDay',
    //     'address',
    //     'phone_number',
    //     'mail',
    // ];
}
