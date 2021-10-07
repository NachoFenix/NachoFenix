<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permiso extends Model
{
    use HasFactory;
    protected $guarded =[];

    public function roles()
    {
        return $this->belongsToMany(Rol::class, 'permisos_roles', 'permisos_id','roles_id');
    }
    

}
