<?php

namespace App\Http\Controllers\Api\V2;

use App\Http\Controllers\Controller;
use App\Http\Resources\ResourceWrapper;
use App\Models\Essay;
use App\Http\Requests\StoreEssayRequest;
use App\Http\Requests\UpdateEssayRequest;

class EssayController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ResourceWrapper::make(true, 200, 'All Essay Data', Essay::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEssayRequest $request)
    {
        $essay = Essay::create($request->validated());
        return ResourceWrapper::make(true, 200, 'Essay Created Successfully', $essay);
    }

    /**
     * Display the specified resource.
     */
    public function show(Essay $essay)
    {
        return ResourceWrapper::make(true, 200, 'Essay Data', $essay);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEssayRequest $request, Essay $essay)
    {
        $essay->update($request->validated());
        return ResourceWrapper::make(true, 200, 'Essay Updated Successfully', $essay);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Essay $essay)
    {
        $essay->delete();
        return ResourceWrapper::make(true, 200, 'Essay Deleted Successfully', null);
    }
}
