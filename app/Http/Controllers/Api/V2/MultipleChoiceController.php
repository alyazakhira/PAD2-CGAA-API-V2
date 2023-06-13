<?php

namespace App\Http\Controllers\Api\V2;

use App\Models\MultipleChoice;
use App\Http\Requests\StoreMultipleChoiceRequest;
use App\Http\Requests\UpdateMultipleChoiceRequest;
use App\Http\Controllers\Controller;
use App\Http\Resources\ResourceWrapper;

class MultipleChoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ResourceWrapper::make(true, 200, 'All Multiple Choice Data', MultipleChoice::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMultipleChoiceRequest $request)
    {
        $multipleChoice = MultipleChoice::create($request->validated());
        return ResourceWrapper::make(true, 200, 'Multiple Choice Created Successfully', $multipleChoice);
    }

    /**
     * Display the specified resource.
     */
    public function show(MultipleChoice $multipleChoice)
    {
        return ResourceWrapper::make(true, 200, 'Multiple Choice Data', $multipleChoice);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMultipleChoiceRequest $request, MultipleChoice $multipleChoice)
    {
        $multipleChoice->update($request->validated());
        return ResourceWrapper::make(true, 200, 'Multiple Choice Updated Successfully', $multipleChoice);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MultipleChoice $multipleChoice)
    {
        $multipleChoice->delete();
        return ResourceWrapper::make(true, 200, 'Multiple Choice Deleted Successfully', null);
    }
}
