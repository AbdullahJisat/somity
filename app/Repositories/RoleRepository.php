<?php

namespace App\Repositories;

use App\Models\Role;
use App\Interfaces\IRole;

class RoleRepository extends BaseRepository implements IRole
{
    protected $model;

    /**
     * RoleRepository constructor.
     *
     * @param Role $model
     */
    public function __construct(Role $model)
    {
        $this->model = $model;
    }
}
