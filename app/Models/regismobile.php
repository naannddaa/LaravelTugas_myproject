<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class regismobile extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'nama_lengkap', 'username', 'email', 'password', 'date', 'gender', 'no_hp', 'alamat'];
    protected $table ='regismobile';
    public $timestamps = 'false';
}
