<?php

namespace Eventos\Repositories;

use Eventos\Models\Pregunta;
use Eventos\Models\Proyecto;
use Eventos\Models\Respuesta;
use Eventos\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use InfyOm\Generator\Common\BaseRepository;
use Spatie\Permission\Models\Role;

/**
 * Class ColorRepository
 * @package Lamuy\Repositories
 * @version September 3, 2018, 10:45 pm UTC
 *
 * @method Color findWithoutFail($id, $columns = ['*'])
 * @method Color find($id, $columns = ['*'])
 * @method Color first($columns = ['*'])
 */
class UserRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [

    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return User::class;
    }

    public function getRolesExceptSuperadmin($user)
    {
        $query = Role::all();

        if(!$user->hasRole('Superadmin')){
            $roles = $query->filter(function($role){
                return $role->name != 'Superadmin';
            })->pluck('name', 'id');
        } else {
            $roles = $query->pluck('name', 'id');
        }

        return $roles;
    }

    public function sendInscripcionEmail(User $user, $charlaId)
    {
        $charla = Proyecto::find($charlaId);

        $data = array(

            'fullname' => $user->fullname,
            'evento' => $charla->nombre,
            'cliente' => ($charla->cliente)? $charla->cliente->nombre : '-',
            'email' => $user->email,
            'dni' => $user->dni,
            'fecha' => $charla->fecha,
            'hora' => $charla->hora,
            'logo' => ($charla->cliente)? $charla->cliente->mainImage() : null,
            'url' => route('web.charlas.ingresar',[
                'cliente' => $charla->cliente_slug,
                'evento' => $charla->nombre_slug,
                'id' => $charla->id])
        );

        Mail::send('emails.inscripcion', ['data' => $data], function($message) use ($data){
            $message->to($data['email']);
            $message->subject('Inscripción a evento online');
            $message->from(config('mail.from.address'));
        });

        return;
    }

    public function userExists($data)
    {
        return User::where('email', $data['email'])->first();
    }

    public function responderEncuesta($id, $respuestas)
    {
        foreach($respuestas as $preguntaId => $opcion){

            $pregunta  = Pregunta::find($preguntaId);

            if($pregunta->clase == 0){

                foreach($opcion as $opt){

                    $respuesta = [
                        'user_id' => Auth::user()->id,
                        'encuesta_id' => $id,
                        'pregunta_id' => $pregunta->id,
                        'opcion_id' => $opt,
                        'texto' => null,
                    ];

                    Respuesta::create($respuesta);
                }
            } else {

                $respuesta = [
                    'user_id' => Auth::user()->id,
                    'encuesta_id' => $id,
                    'pregunta_id' => $pregunta->id,
                    'opcion_id' => ($pregunta->clase != 2)? $opcion : null,
                    'texto' => ($pregunta->clase == 2)? $opcion : '',
                ];

                Respuesta::create($respuesta);

            }

        }
    }

    public function cantAnswerTest($encuestaId, $userId)
    {
        return Respuesta::where('encuesta_id', $encuestaId)->where('user_id', $userId)->first();
    }

}
