<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ctdonhang extends Model
{
    use HasFactory;
    protected $table = "ctdonhang";
    public $timestamps = false;
    protected $fillable=['product_id','Madonhang','quantity','price'];
}
