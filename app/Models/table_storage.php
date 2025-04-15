<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class table_storage extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'name', 'description', 'file_path'];
    protected $table ='table_storage';
    public $timestamps = 'false';
}
