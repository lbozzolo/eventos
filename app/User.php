<?php

namespace Eventos;

use Carbon\Carbon;
use Eventos\Models\Cliente;
use Eventos\Models\Proyecto;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;
    use SoftDeletes;

    public $table = 'users';

    protected $dates = ['deleted_at'];

    public $paises = ['Argentina', 'Bolivia', 'Brasil', 'Chile', 'Ecuador', 'Paraguay', 'Uruguay'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $fillable = [
        'name',
        'lastname',
        'email',
        'phone',
        'dni',
        'pais',
        'localidad',
        'ocupacion',
        'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'name' => 'string',
        'lastname' => 'string',
        'email' => 'string'
    ];

    public static $rules = [
        'name' => 'required',
        'lastname' => 'required',
        'email' => 'required|unique:users,email|email',
        'password' => 'required|max:6'
    ];

    public static $rulesInscripcion = [
        'name' => 'required',
        'lastname' => 'required',
        'email' => 'required|email|unique:users,email',
        'dni' => 'max:191',
        'phone' => 'max:191',
        'localidad' => 'max:255',
        'ocupacion' => 'max:255'
    ];

    public static $change_password_rules = [
        'password' => 'required|min:6',
        'password_confirmation' => 'required|min:6|same:password'
    ];

    public function getPaisOrigenAttribute()
    {
        $index = $this->pais;
        $pais = strtoupper(($this->pais != null)? $this->paises[$index] : '');

        return $pais;
    }

    public function getFechaCreadoAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])->format('d-m-Y');
    }

    public function getFechaEditadoAttribute()
    {
        return Carbon::parse($this->attributes['updated_at'])->format('d-m-Y');
    }

    public function isSuperAdmin()
    {
        return ($this->email == 'lucas@verticedigital.com.ar' || $this->email == 'fernando@verticedigital.com.ar');
    }

    public function getFullnameAttribute()
    {
        return ($this->name != $this->email)? $this->name . ' ' . $this->lastname : '-';
    }

    // Relationships

    public function proyectos()
    {
        return $this->belongsToMany(Proyecto::class)->withTimestamps();
    }

    public function cliente()
    {
        return $this->hasOne(Cliente::class);
    }


}
