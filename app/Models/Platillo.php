<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Platillo extends Model
{
    use HasFactory;
    //Protected $fillable debe de contener todos los atributos que deesemos agregar en nuestra tabla de la DB y que puedan ser manipulados.
    protected $fillable = [
        'nombre_platillo',
        'tam_platillo',
        'precio_platillo',
        'descripcion_platillo',
        'user_id',
    ];
    
    //Protected $guarded toma los atributos que no pueden ser manipulados por el usuario, por ejemplo, un ID.
    
    public $timestamps = false;

    public function user(){

        return $this->belongsTo(User::class);
    }
};