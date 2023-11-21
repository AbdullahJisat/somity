<?php

namespace App\Repositories;

use App\Models\Permission;
use App\Interfaces\IPermission;

class PermissionRepository extends BaseRepository implements IPermission
{
    protected $model;

    /**
     * PermissionRepository constructor.
     *
     * @param Permission $model
     */
    public function __construct(Permission $model)
    {
        $this->model = $model;
    }
}
