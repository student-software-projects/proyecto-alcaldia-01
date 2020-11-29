<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Builder\Class_;
use Illuminate\Database\Eloquent\SoftDeletes;
class equipos extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'equipos';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nombre_equipo','logo','localidades_id'
    ];

    public function localidades()
    {
        return $this->belongsTo(localidades::class,'localidades_id','id');
    }

    protected $dates = ['deleted_att'];
}
