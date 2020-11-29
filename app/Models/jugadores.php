<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class jugadores extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'jugadores';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nombres','apellidos','numero_camisa','apodo','equipo_id'
    ];
    protected $dates = ['deleted_att'];

    public function equipos()
    {
        return $this->belongsTo(equipos::class,'equipo_id','id');
    }
}
