<?php

namespace Modules\Role\Http\Controllers;

use App\Http\Services\UserServices;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Role\Http\Requests\assignPermissionToRoleRequest;
use Modules\Role\Http\Requests\assignRoleToUserRequest;
use Modules\Role\Services\PermissionServices;
use Modules\Role\Services\RoleServices;

class RolePermissionController extends Controller
{
    public function __construct(
        private RoleServices $roleServices , private PermissionServices $permissionServices ,
        private UserServices $userServices
    ){}
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $roles = $this->roleServices->all();
        $users = $this->userServices->all();
        return view('role::role-permission.index',compact('roles','users'));
    }
    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function assignPermissionToRoleCreate()
    {
        $roles = $this->roleServices->all();
        $permissions = $this->permissionServices->all();
        return view('role::role-permission.create', compact('roles' , 'permissions'));
    }
    public function assignPermissionToRoleStore(assignPermissionToRoleRequest $request)
    {
        $this->roleServices->givePermissionToRole($request);
        return redirect()->back();
    }

    public function assignRoleToUserCreate()
    {
        $roles = $this->roleServices->all();
        $users = $this->userServices->all();
        return view('role::role-user.create', compact('roles' , 'users'));
    }
    public function assignRoleToUserStore(assignRoleToUserRequest $request)
    {
        $this->roleServices->giveRoleToUser($request);
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
