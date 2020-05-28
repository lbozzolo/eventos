<?php

namespace Eventos;

use Carbon\Carbon;
use Eventos\Models\Cliente;
use Eventos\Models\Proyecto;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Cache;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;
    use SoftDeletes;

    public $table = 'users';

    protected $dates = ['deleted_at'];

    public $paises = array(

        "Argentina","Afganistán","Albania","Alemania","Andorra","Angola","Antigua y Barbuda","Arabia Saudita","Argelia","Armenia",
        "Australia","Austria","Azerbaiyán","Bahamas","Bangladés","Barbados","Baréin","Bélgica","Belice","Benín",
        "Bielorrusia","Birmania","Bolivia","Bosnia y Herzegovina","Botsuana","Brasil","Brunéi","Bulgaria","Burkina Faso","Burundi",
        "Bután","Cabo Verde","Camboya","Camerún","Canadá","Catar","Chad","Chile","China","Chipre",
        "Ciudad del Vaticano","Colombia","Comoras","Corea del Norte","Corea del Sur","Costa de Marfil","Costa Rica","Croacia","Cuba","Dinamarca",
        "Dominica","Ecuador","Egipto","El Salvador","Emiratos Árabes Unidos","Eritrea","Eslovaquia","Eslovenia","España","Estados Unidos",
        "Estonia","Etiopía","Filipinas","Finlandia","Fiyi","Francia","Gabón","Gambia","Georgia","Ghana",
        "Granada","Grecia","Guatemala","Guyana","Guinea","Guinea ecuatorial","Guinea-Bisáu","Haití","Honduras","Hungría",
        "India","Indonesia","Irak","Irán","Irlanda","Islandia","Islas Marshall","Islas Salomón","Israel","Italia",
        "Jamaica","Japón","Jordania","Kazajistán","Kenia","Kirguistán","Kiribati","Kuwait","Laos","Lesoto",
        "Letonia","Líbano","Liberia","Libia","Liechtenstein","Lituania","Luxemburgo","Madagascar","Malasia","Malaui",
        "Maldivas","Malí","Malta","Marruecos","Mauricio","Mauritania","México","Micronesia","Moldavia","Mónaco",
        "Mongolia","Montenegro","Mozambique","Namibia","Nauru","Nepal","Nicaragua","Níger","Nigeria","Noruega",
        "Nueva Zelanda","Omán","Países Bajos","Pakistán","Palaos","Panamá","Papúa Nueva Guinea","Paraguay","Perú","Polonia",
        "Portugal","Reino Unido","República Centroafricana","República Checa","República de Macedonia","República del Congo","República Democrática del Congo","República Dominicana","República Sudafricana","Ruanda",
        "Rumanía","Rusia","Samoa","San Cristóbal y Nieves","San Marino","San Vicente y las Granadinas","Santa Lucía","Santo Tomé y Príncipe","Senegal","Serbia",
        "Seychelles","Sierra Leona","Singapur","Siria","Somalia","Sri Lanka","Suazilandia","Sudán","Sudán del Sur","Suecia",
        "Suiza","Surinam","Tailandia","Tanzania","Tayikistán","Timor Oriental","Togo","Tonga","Trinidad y Tobago","Túnez",
        "Turkmenistán","Turquía","Tuvalu","Ucrania","Uganda","Uruguay","Uzbekistán","Vanuatu","Venezuela","Vietnam",
        "Yemen","Yibuti","Zambia","Zimbabue"

    );

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

    public function isOnline()
    {
        return Cache::has('user-is-online'.$this->attributes['id']);
    }

    public function isSuperAdmin()
    {
        return ($this->email == 'lucas@verticedigital.com.ar' || $this->email == 'fernando@verticedigital.com.ar');
    }

    public function isInscripto($proyectoId)
    {
        return $this->proyectos->contains($proyectoId);
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
