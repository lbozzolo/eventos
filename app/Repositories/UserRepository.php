<?php

namespace Eventos\Repositories;

use Eventos\Models\Proyecto;
use Eventos\User;
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
            'cliente' => $charla->cliente->nombre,
            'email' => $user->email,
            'dni' => $user->dni,
            'fecha' => $charla->fecha,
            'hora' => $charla->hora,
            'logo' => $charla->cliente->mainImage(),
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

}
