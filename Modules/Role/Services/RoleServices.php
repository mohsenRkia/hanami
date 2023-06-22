<?php

namespace Modules\Role\Services;

use App\Models\User;
use Spatie\Permission\Models\Role;

class RoleServices
{
    public function __construct(
        private Role $role
    ){}

    public function all()
    {
        return $this->role->all();
    }

    public function allWithPaginate($num)
    {
        return $this->role->paginate($num);
    }

    public function store($request)
    {
        return $this->role->create([
           'name' => $request->name,
           'name_fa' => $request->name_fa,
           'guard_name' => 'web'
        ]);
    }

    public function givePermissionToRole($request)
    {
        $roles = Role::findByName($request->role_name);
        return $roles->givePermissionTo($request->permission_name);
    }

    public function giveRoleToUser($request)
    {
        $user = User::find($request->user_id);
        return $user->assignRole($request->role);
    }
    public function giveRoleToUserUpdate($request,$user)
    {
        return $user->syncRoles($request->role);
    }
}
