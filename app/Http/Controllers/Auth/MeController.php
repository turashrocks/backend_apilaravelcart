<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Resources\PrivateUserResource;
use Illuminate\Http\Request;
// use App\Models\User;
// use App\Models\Role;
// use App\Models\Permission;
// use Laratrust\Models\LaratrustRole;
// use Laratrust\Models\LaratrustPermission;
use Laratrust\Traits\LaratrustUserTrait;

class MeController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth:api']);
    }

    public function action(Request $request)
    {
        return new PrivateUserResource($request->user());
        // dd($request->user()->allPermissions());
    }
}
