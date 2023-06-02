<?php

namespace Modules\Role\Services;

use Spatie\Permission\Models\Permission;

class PermissionServices
{
    public function __construct(
        private Permission $permission
    )
    {}
}
