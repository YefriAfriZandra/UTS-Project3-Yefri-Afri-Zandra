<?php

namespace App\Http\Controllers;

use App\Models\PembayaranKomite;
use Illuminate\Http\Request;

class PembayaranKomiteControllerApi extends Controller
{
    public function index()
    {
        return PembayaranKomite::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return PembayaranKomite::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return PembayaranKomite::findOrFail($id);
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
        {
            $PembayaranKomite = PembayaranKomite::findOrFail($id);
            $PembayaranKomite->update($request->all());
    
            return $PembayaranKomite;
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $PembayaranKomite = PembayaranKomite::findOrFail($id);
        $PembayaranKomite->delete();

        return 204;
    }
}
