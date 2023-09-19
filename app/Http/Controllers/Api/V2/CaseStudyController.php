<?php

namespace App\Http\Controllers\Api\V2;

use App\Http\Controllers\Controller;
use App\Http\Resources\ResourceWrapper;
use App\Models\CaseStudy;
use App\Http\Requests\StoreCaseStudyRequest;
use App\Http\Requests\UpdateCaseStudyRequest;

class CaseStudyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ResourceWrapper::make(true, 200, 'All Case Study Data', CaseStudy::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCaseStudyRequest $request)
    {
        $caseStudy = CaseStudy::create($request->validated());
        return ResourceWrapper::make(true, 200, 'Case Study Created Successfully', $caseStudy);
    }

    /**
     * Display the specified resource.
     */
    public function show(CaseStudy $caseStudy)
    {
        return ResourceWrapper::make(true, 200, 'Case Study Data', $caseStudy);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCaseStudyRequest $request, CaseStudy $caseStudy)
    {
        $caseStudy->update($request->validated());
        return ResourceWrapper::make(true, 200, 'Case Study Updated Successfully', $caseStudy);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CaseStudy $caseStudy)
    {
        $caseStudy->delete();
        return ResourceWrapper::make(true, 200, 'Case Study Deleted Successfully', null);
    }
}
