<?php

namespace Eventos\Models;

use Carbon\Carbon;
use Eventos\Models\Entity as Entity;
use Eventos\User;

class Proyecto extends Entity
{
    public $table = 'proyectos';
    public $timestamps = false;

    public $image_croppie_width = 960;
    public $image_croppie_height = 720;
    public $addHours = 8;

    public $paises = array(

        // 0-9
        "Argentina","Afganistán","Albania","Alemania","Andorra","Angola","Antigua y Barbuda","Arabia Saudita","Argelia","Armenia",
        // 10-19
        "Australia","Austria","Azerbaiyán","Bahamas","Bangladés","Barbados","Baréin","Bélgica","Belice","Benín",
        // 20-29
        "Bielorrusia","Birmania","Bolivia","Bosnia y Herzegovina","Botsuana","Brasil","Brunéi","Bulgaria","Burkina Faso","Burundi",
        // 30-39
        "Bután","Cabo Verde","Camboya","Camerún","Canadá","Catar","Chad","Chile","China","Chipre",
        // 40-49
        "Ciudad del Vaticano","Colombia","Comoras","Corea del Norte","Corea del Sur","Costa de Marfil","Costa Rica","Croacia","Cuba","Dinamarca",
        // 50-59
        "Dominica","Ecuador","Egipto","El Salvador","Emiratos Árabes Unidos","Eritrea","Eslovaquia","Eslovenia","España","Estados Unidos",
        // 60-69
        "Estonia","Etiopía","Filipinas","Finlandia","Fiyi","Francia","Gabón","Gambia","Georgia","Ghana",
        // 70-79
        "Granada","Grecia","Guatemala","Guyana","Guinea","Guinea ecuatorial","Guinea-Bisáu","Haití","Honduras","Hungría",
        // 80-89
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

    public $fillable = [
        'nombre',
        'descripcion',
        'responsable',
        'cliente_id',
        'estado_id',
        'tipo_id',
        'publico',
        'fecha',
        'maximas_consultas',
        'vistas_finalizado',
        'alert_message',
        'alert_message_active',
        'duracion',
    ];

    public static $rules = [
        'nombre' => 'required|max:191',
        'descripcion' => 'required|max:191',
        'duracion' => 'required',
    ];

    public $daysSpanish = [
        0 => 'domingo',
        1 => 'lunes',
        2 => 'martes',
        3 => 'miércoles',
        4 => 'jueves',
        5 => 'viernes',
        6 => 'sábado',
    ];

    public function iframesRestantes()
    {
        $iframes = $this->iframes;
        $iframes->shift();

        return $iframes;
    }

    public function dateIsPast()
    {
        return Carbon::parse($this->attributes['fecha'])->addHours($this->addHours)->format('Y-m-d H:i') < Carbon::now()->format('Y-m-d H:i');
    }

    public function tipoProyecto()
    {
        $tipo = ($this->tipo)? $this->tipo->nombre : null;

        if(!$tipo)
            $tipo = ($this->publico)? 'Público' : 'Privado';

        return $tipo;
    }

    public function isFinished()
    {
        $finalizado = Estado::where('slug', 'finalizado')->first();

        // Si la fecha es pasada (y existe el estado finalizado) le cambio el estado a finalizado
        if($this->dateIsPast() && $finalizado){
            $this->estado_id = $finalizado->id;
            $this->save();
        }

        // Si la fecha no es pasada pero su estado es finalizado
        if($this->estado->slug == 'finalizado'){
            $result = true;
        }

        return $this->estado->slug == 'finalizado';
    }

    public function hasBegun()
    {
        return Carbon::now()->format('Y-m-d H:i') >= Carbon::parse($this->attributes['fecha'])->format('Y-m-d H:i');
    }

    public function isGoingOn()
    {
        return $this->hasBegun() && !$this->isFinished();
    }

    public function isAlertMessage()
    {
        return $this->attributes['alert_message'] && $this->attributes['alert_message_active'];
    }

    public function getNameOfDay($date)
    {
        $fecha = Carbon::parse($date);
        return ucfirst($this->daysSpanish[$fecha->dayOfWeek]);
    }

    public function scopeActive($query, $id = null)
    {
        $activo = Estado::where('slug', '=', 'activo')->first()->id;
        $finalizado = Estado::where('slug', '=', 'finalizado')->first()->id;


        if($id){
//            $result = $query->where('estado_id', '=', $activo)->orWhere('estado_id', '=', $finalizado)->where('id', '=', $id);
            $result = $query->where('id', '=', $id);
        } else {
            $result = $query->where('estado_id', '=', $activo)->orWhere('estado_id', '=', $finalizado)->orderBy('id', 'desc');
        }

        return $result;
    }

    public function scopeFindactive()
    {
        $activo = Estado::where('slug', '=', 'activo')->first()->id;
        $activo = (string)$activo;
        return $this->where('estado_id', '=', $activo);
    }

    public function scopeConsultasArchivadas($query, $sala = null)
    {
        $query = ($sala)? $this->consultas()->where('iframe_id', $sala)->where('archivado', '=', 1) : $this->consultas()->where('archivado', '=', 1);
        return $query->get();
    }

    public function scopeConsultasRecientes($query, $sala = null)
    {
        $query = ($sala)? $this->consultas()->where('iframe_id', $sala)->where('archivado', '=', null) : $this->consultas()->where('archivado', '=', null);
        return $query->get();
    }

    public function auspiciantesShuffle()
    {
        return $this->auspiciantes->shuffle();
    }

    public function getClienteSlugAttribute()
    {
        return ($this->cliente)? str_slug($this->cliente->nombre) : '-';
    }

    public function getNombreSlugAttribute()
    {
        return str_slug($this->nombre);
    }

    public function getFechaAttribute()
    {
        return Carbon::parse($this->attributes['fecha'])->format('d-m-Y');
    }

    public function getFechaFormattedAttribute()
    {
        return Carbon::parse($this->attributes['fecha'])->format('d-m-Y H:i');
    }

    public function getFechaFormattedViewAttribute()
    {
        return Carbon::parse($this->attributes['fecha'])->format('Y-m-d H:i');
    }

    public function getFechaCompletaAttribute()
    {
        return Carbon::parse($this->attributes['fecha']);
    }

    public function getHoraAttribute()
    {
        return Carbon::parse($this->attributes['fecha'])->format('H:i');
    }

    public function connected()
    {
        return $this->inscriptos->filter(function ($user){
                return $user->isOnline();
        })->unique()->count();
    }

    public function connectedPercentage()
    {
        $inscriptos = $this->inscriptos()->count();
        $conectados = $this->connected();
        $porcentaje = 0;

        if($inscriptos > 0){
            $porcentaje = ($conectados * 100) / $inscriptos;
        }

        return number_format($porcentaje,1,",",".");
    }

    public function totalAsistentes()
    {
        return $this->inscriptos()->where('attendment', 1)->get()->count();
    }

    public function porcentajeTotalAsistentes()
    {
        $total = $this->inscriptos->count();
        $porcentaje = $this->totalAsistentes() * 100 / $total;
        return number_format($porcentaje, 0);
    }

    public function usersByCountryAmount()
    {
        $users = $this->inscriptos()->where('users.pais', '!=', null)->get(['pais'])->groupBy('pais')->toArray();
        $result = [];
        foreach($users as $pais => $cant){
            array_push($result, count($cant));
        }

        return $result;
    }

    public function usersByCountryName()
    {
        $users = $this->inscriptos()->where('users.pais', '!=', null)->get(['pais'])->groupBy('pais')->toArray();

        $result = [];
        foreach($users as $pais => $cant){
            array_push($result, $this->paises[$pais]);
        }

        return $result;
    }

    public function usersOnlineThroughTime()
    {
        $users = $this->reportes()->get(['cantidad_online']);
        $result = [];
        foreach($users as $user){
            array_push($result, $user->cantidad_online);
        }
        return $result;
    }

    public function timestampsThroughTime()
    {
        $timestamps = $this->reportes()->get(['created_at']);
        $result = [];
        foreach($timestamps as $time){
            array_push($result, Carbon::parse($time->created_at)->format('H:i'));
        }
        return array_values($result);
    }

    public function picoUsuariosOnline()
    {
        return $this->reportes->sortByDesc('cantidad_online')->first()->cantidad_online;
    }

    public function porcentajePicoUsuariosOnline()
    {
        return round($this->picoUsuariosOnline() * 100 / $this->inscriptos->count());
    }

    public function codigosDisponibles()
    {
        return $this->codigos()->where('user_id', null)->get();
    }

    // Relationships

    public function categorias()
    {
        return $this->belongsToMany(Categoria::class);
    }

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function grupos()
    {
        return $this->belongsToMany(Grupo::class);
    }

    public function estado()
    {
        return $this->belongsTo(Estado::class);
    }

    public function tipo()
    {
        return $this->belongsTo(Tipo::class);
    }

    public function iframes()
    {
        return $this->hasMany(Iframe::class);
    }

    public function videos()
    {
        return $this->hasMany(Video::class);
    }

    public function pdfs()
    {
        return $this->hasMany(Pdf::class);
    }

    public function codigos()
    {
        return $this->hasMany(Codigo::class);
    }

    public function header()
    {
        return $this->hasOne(Header::class);
    }

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }

    public function auspiciantes()
    {
        return $this->belongsToMany(Auspiciante::class);
    }

    public function inscriptos()
    {
        return $this->belongsToMany(User::class)->withTimestamps()->withPivot(['attendment', 'created_at']);
    }

    public function consultas()
    {
        return $this->hasMany(Consulta::class);
    }

    public function reportes()
    {
        return $this->hasMany(Reporte::class);
    }

    public function encuestas()
    {
        return $this->hasMany(Encuesta::class);
    }

}
