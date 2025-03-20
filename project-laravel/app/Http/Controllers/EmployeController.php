<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employees;

class EmployeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = array(
            'title'       => 'Data Master',
            'active_master' => 'active',
            'active_sub'  => 'active',
            'breadcumb1'  => 'Data Master',
            'breadcumb2'  => 'Data Pegawai',
        );

        $employe = employees::all();

        return view('employe.list' , $data, ['employees' => $employe]);
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
        //
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
