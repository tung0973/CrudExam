<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Furniture extends Model
{
    protected $table = 'furniture';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'product_code', 'price','avatar'];
}
