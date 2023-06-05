<?php

namespace App\Models;

use App\Trait\Table\useTableResetPassword;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PasswordAuthentications extends Model
{
    public $timestamps = false;
    use HasFactory, useTableResetPassword;

    protected $fillable = [
        'token',
        'type',
        'start_at',
        'end_at'
    ];

    protected $casts = [
        'start_at' => 'datetime: Y-m-s H:i:s',
        'end_at'   => 'datetime: Y-m-s H:i:s',
    ];
}