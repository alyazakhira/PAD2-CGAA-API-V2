<?php

namespace App\Http\Controllers\Api\V2;

use App\Models\ExamSession;
use App\Http\Requests\StoreExamSessionRequest;
use App\Http\Requests\UpdateExamSessionRequest;
use App\Http\Controllers\Controller;
use App\Http\Resources\ResourceWrapper;


class ExamSessionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ResourceWrapper::make(true, 200, 'All Exam Session Data', ExamSession::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreExamSessionRequest $request)
    {
        $examSession = ExamSession::create($request->validated());
        return ResourceWrapper::make(true, 200, 'Exam Session Created Successfully', $examSession);
    }

    /**
     * Display the specified resource.
     */
    public function show(ExamSession $examSession)
    {
        return ResourceWrapper::make(true, 200, 'Exam Session Data', $examSession);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateExamSessionRequest $request, ExamSession $examSession)
    {
        $examSession->update($request->validated());
        return ResourceWrapper::make(true, 200, 'Exam Session Updated Successfully', $examSession);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ExamSession $examSession)
    {
        $examSession->delete();
        return ResourceWrapper::make(true, 200, 'Exam Session Deleted Successfully', null);
    }
}
