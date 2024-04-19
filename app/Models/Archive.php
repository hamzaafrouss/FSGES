<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Archive extends Model
{
    use HasFactory;
    protected $fillable = [ 
        'Objet','Nom','Prenom','Service','Avec','Debut','Fin','Rapport'
    ];
function service (){
    return $this->belongsTo(Service::class);
}
}

