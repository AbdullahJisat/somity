<?php

namespace App\Http\Controllers;

use App\Services\PermissionService;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    private $permission;

    /**
     * __construct
     *
     * @param  mixed $ipermission
     * @return void
     */
    public function __construct(PermissionService $permissionService)
    {
        $this->permission = $permissionService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // abort_if(auth()->user()->can('permission-view'), 401);
        return view('permission.index', ['permissions' => $this->permission->all()]);
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
            abort_if(!auth()->user()->can('permission-create'), 401);
            $this->permission->store($request->all());
            return back()->with('success', 'Data saved succesfully');
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
        //
    }
}
