<?php

namespace App\Http\Controllers;

use App\Objects;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ObjectsController extends Controller
{
    /**
     * @return Objects[]|\Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        $objects = Objects::all();

        return $objects;
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
        $data = $request->all();
        Validator::make($data, Objects::validateObjects())->validate();

        $object = Objects::create($data);

        return $object;
    }

    /**
     * @param Objects $objects
     * @return Objects
     */
    public function show(Objects $objects)
    {
        return $objects;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Objects  $objects
     * @return \Illuminate\Http\Response
     */
    public function edit(Objects $objects)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Objects  $objects
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Objects $objects)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Objects  $objects
     * @return \Illuminate\Http\Response
     */
    public function destroy(Objects $objects)
    {
        //
    }
}
