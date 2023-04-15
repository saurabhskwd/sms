<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\StudentDetail;
use App\DataTables\StudentdetailDataTable;


class StudentDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(StudentdetailDataTable $dataTable)
    {
        return $dataTable->render('showstudentdetail');
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
        $student = new StudentDetail;
        $student->sname = $request->get('sname');
        $student->fname = $request->get('fname');
        $student->mname = $request->get('mname');
        $student->adhar = $request->get('adhar');
        $student->address = $request->get('address');
        $student->gender = $request->get('gender');
        $student->category = $request->get('category');
        $student->dob = $request->get('dob');
        $student->phone = $request->get('phone');
        $student->email = $request->get('email');
        $student->class = $request->get('class');
        $student->session = $request->get('session');
        $student->save();
        return redirect('/sd')->with('success','Record Saved');
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
