<?php

namespace Modules\Role\Services;

use Spatie\Permission\Models\Permission;

class PermissionServices
{
    public function __construct(
        private Permission $permission
    ){}

    public function all()
    {
        return $this->permission->all();
    }

    public function paginate($num)
    {
        return $this->permission->paginate($num);
    }

    public function allWithPaginate($num)
    {
        return $this->permission->paginate($num);
    }

    public function store($request)
    {
        return $this->permission->create([
            'name' => $request->name,
            'guard_name' => 'web'
        ]);
    }
}
