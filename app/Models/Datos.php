<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Datos extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'web_scrapping';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'compania',
        'fecha',
        'fecha_ida',
        'fecha_vuelta',
        'numero_personas',
        'precio'
    ];

     /**
     * Mutaciones de fecha.
     *
     * @var array
     */
    protected $dates = [
        'created_at', 'updated_at', 'deleted_at',
    ];
}
