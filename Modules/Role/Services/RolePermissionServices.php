<?php

namespace Modules\Role\Services;

use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionServices
{
    public function __construct(
        private Permission $permission, private Role $role
    ){}


}
