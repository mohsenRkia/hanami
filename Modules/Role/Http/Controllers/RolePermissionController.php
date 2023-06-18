<?php

namespace Modules\Role\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Role\Services\PermissionServices;
use Modules\Role\Services\RolePermissionServices;
use Modules\Role\Services\RoleServices;

class RolePermissionController extends Controller
{
    public function __construct(
        private RolePermissionServices $rolePermissionServices , private RoleServices $roleServices , private PermissionServices $permissionServices
    ){}
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $role_permissions = [];
        return view('role::role-permission.index',compact('role_permissions'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $rols = $this->roleServices->all();
        $permissions = $this->permissionServices->all();
        return view('role::role-permission.create', compact('rols' , 'permissions'));
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(StorePermissionRequest $request)
    {
        $this->permissionServices->store($request);
        return redirect()->back();
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('role::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('role::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
