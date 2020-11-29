<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\equipos;
use Illuminate\Database\Eloquent\SoftDeletes;
class localidades extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'localidades';
    protected $primaryKey = 'id';
    protected $fillable = [
        'localidad'
    ];

    protected $dates = ['deleted_att'];
}
