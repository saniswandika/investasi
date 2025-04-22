<?php

namespace App\Http\Controllers;

use App\InfrastructureSubcategory;
use Illuminate\Http\Request;

class InfrastructureSubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->user = auth()->user()->role;
            if ($this->user == 'member usaha'){
                abort(403);
            }
            return $next($request);
        });
    }

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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\InfrastructureSubcategory  $infrastructureSubcategory
     * @return \Illuminate\Http\Response
     */
    public function show(InfrastructureSubcategory $infrastructureSubcategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\InfrastructureSubcategory  $infrastructureSubcategory
     * @return \Illuminate\Http\Response
     */
    public function edit(InfrastructureSubcategory $infrastructureSubcategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\InfrastructureSubcategory  $infrastructureSubcategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InfrastructureSubcategory $infrastructureSubcategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\InfrastructureSubcategory  $infrastructureSubcategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(InfrastructureSubcategory $infrastructureSubcategory)
    {
        //
    }
}
