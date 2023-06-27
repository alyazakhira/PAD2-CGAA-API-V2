<?php

namespace App\Http\Controllers\Api\V2;

use App\Models\User;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Controllers\Controller;
use App\Http\Resources\ResourceWrapper;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $users = User::where('is_admin', '==', false)->get();
        } catch (\Exception $e) {
            return ResourceWrapper::make(false, $e->getCode(), $e->getMessage(), null);
        }
        return ResourceWrapper::make(true, 200, 'All Users Data', $users);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        try {
            $user = User::create($request->validated());
        } catch (\Exception $e) {
            return ResourceWrapper::make(false, $e->getCode(), $e->getMessage(), null);
        }
        return ResourceWrapper::make(true, 200, 'User Created Successfully', $user);
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return ResourceWrapper::make(true, 200, 'User Data', $user); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        $user->update($request->validated());
        return ResourceWrapper::make(true, 200, 'User Updated Successfully', $user);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        try {
            $user->delete();
        } catch (\Exception $e) {
            return ResourceWrapper::make(false, $e->getCode(), $e->getMessage(), null);
        }
        return ResourceWrapper::make(true, 200, 'User Deleted Successfully', null);
    }
}
