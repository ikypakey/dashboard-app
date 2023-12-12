<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Background extends Model
{
    use HasFactory;
    protected $table = 'backgrounds';

    protected $primaryKey ='background_id';

    protected $fillable= [
        'background_name',
        'background_image',
    ];
}
