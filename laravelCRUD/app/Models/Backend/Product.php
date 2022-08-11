<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable=[
        'pName',
        'pDes',
        'pCat',
        'pScat',
        'pPrice',
        'pStatus'
    ];
}