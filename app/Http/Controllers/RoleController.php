<?php

namespace App\Http\Controllers;

use App\Interfaces\IRole;
use App\Services\PermissionService;
use App\Services\RoleService;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    private $role;
    private $permission;
    private $permissionIntance = App::make('App\Services\RoleService');

    /**
     * __construct
     *
     * @param  mixed $irole
     * @return void
     */
    public function __construct(RoleService $roleService, PermissionService $permissionService)
    {
        $this->role = $roleService;
        $this->permission = $permissionService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        abort_if(auth()->user()->can('role-view'), 401);
        return view('role.index', ['roles' => $this->role->all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            abort_if(!auth()->user()->can('role-create'), 401);
            $this->role->store($request->all());
            return back()->with('success', actionMessage('save'));
        } catch (\Throwable $e) {
            return $e;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
    }

    public function rolePermission($roleId)
    {
        return view('role.role_permission', ['role' =>  $this->role->edit($roleId, ['*'], ['permissions']), 'permissions' => $this->permission->all()]);
    }

    public function storeRolePermission(Request $request, $roleId)
    {
        $role = $this->role->edit($roleId);
        $role->permissions()->attach($request->permission_id);
        return back();
    }
}
