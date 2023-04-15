<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Fee;
use App\DataTables\FeeDataTable;
use Alert;

class FeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(FeeDataTable $dataTable)
    {
       return $dataTable->render('showfee');
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
        //validation
        $request->validate([
            'feedate' => 'required|min:5',
            'studentname' => 'required|min:5',
            'father' =>  'required|min:5',
            'amount' => 'required',
            'inwords'=> 'required',       
        ]);
        $fee = new Fee;
        $fee->payment_date = $request->POST('feedate');
        $fee->sname = $request->POST('studentname');
        $fee->fname = $request->POST('father');
        $fee->amount = $request->POST('amount');
        $fee->amount_in_words = $request->POST('inwords');
        $fee->save();
        return redirect('/fee')->with('success','Record Saved');
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
