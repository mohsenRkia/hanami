<?php

namespace Modules\Role\Services;

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
}
