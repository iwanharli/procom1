<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Redaction extends Model
{
    use HasFactory;

    protected $fillable = [
    	'redaction_content'
    ];

    protected $hidden = [

    ];
}
