<?php

namespace App\Http\Controllers;

use App\Models\Catergory;
use App\Http\Requests\StoreCatergoryRequest;
use App\Http\Requests\UpdateCatergoryRequest;

class CatergoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCatergoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCatergoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Catergory  $catergory
     * @return \Illuminate\Http\Response
     */
    public function show(Catergory $catergory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Catergory  $catergory
     * @return \Illuminate\Http\Response
     */
    public function edit(Catergory $catergory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCatergoryRequest  $request
     * @param  \App\Models\Catergory  $catergory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCatergoryRequest $request, Catergory $catergory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Catergory  $catergory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Catergory $catergory)
    {
        //
    }
}
