<?php

namespace Eventos\Repositories;

use Eventos\User;
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
}
