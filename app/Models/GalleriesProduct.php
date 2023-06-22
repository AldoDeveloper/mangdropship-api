<?php

namespace App\Models;

use App\Trait\UUID\UuidSetGlobal;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleriesProduct extends Model
{
    use HasFactory, UuidSetGlobal;
    public $keyType = 'string';
    
    protected $fillable =[
        'id_product',
        'image_path',
        'thumbnails',
    ];

    protected $casts =[
        'thumbnails' => 'boolean'
    ];
}