<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class donhang extends Model
{
    use HasFactory;
    protected $table = "donhang";
    public $timestamps = false;
    protected $fillable=['id_kh','Fist_Name','Last_Name','dienthoai','diachi','Email'];
}
