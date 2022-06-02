<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $table = 'contacts';
    public $timestamps = true;


    protected $fillable = [
        'first_name',
        'last_name',
        'title',
        'district',
        'region',
        'mobile',
        'created_at',
        'updated_at'
    ];
}
