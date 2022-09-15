<?php

namespace App\Http\Controllers;

use App\Models\Melding;
use Illuminate\Http\Request;
use App\Http\Resources\MeldingResource;

class MeldingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return MeldingResource::collection(Melding::all());
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
        $request->validate([
            'name'=>'required',
            'description'=>'required',
        ]);

        $melding = Melding::create([
            'name' => $request->input('name'),
            'description' => $request->input('description')
        ]);

        return new MeldingResource($melding);
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Melding  $melding
     * @return \Illuminate\Http\Response
     */
    public function show(Melding $melding)
    {
        return MeldingResource($melding);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Melding  $melding
     * @return \Illuminate\Http\Response
     */
    public function edit(Melding $melding)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Melding  $melding
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Melding $melding)
    {
        $author->update([
            'name' => $request->input('name'),
            'description' => $request->input('description')
        ]);

        return new MeldingResource($melding);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Melding  $melding
     * @return \Illuminate\Http\Response
     */
    public function destroy(Melding $melding)
    {
        $melding->delete();
        return response(null, 204);
    }
}
