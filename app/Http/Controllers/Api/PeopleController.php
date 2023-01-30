<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PeopleResource;
use App\Models\People;
use Illuminate\Http\Request;

class PeopleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $people = People::all();
    return response(PeopleResource::collection($people), 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $people=People::create($request->all());
        return response(new PeopleResource($people),201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\People  $people
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show(People $people,int $id)
    {
        return response(People::find($id),200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\People  $people
     * @param int $id
     * @param string $nazwisko
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, People $people, int $id, string $nazwisko)
    {
        $people=People::find($id);
        $people->update(['nazwisko'=>$nazwisko]);
        return response ($people,200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\People  $people
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(People $people,int $id)
    {
        $people=People::destroy($id);
        return response('uzytkownik usunienty',204);
    }
}
