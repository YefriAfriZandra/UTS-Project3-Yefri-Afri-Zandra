<?php

namespace App\Http\Controllers;

use App\Models\JadwalPelajaran;
use Illuminate\Http\Request;

class JadwalPelajaranControllerApi extends Controller
{
    public function index()
    {
        return JadwalPelajaran::all();
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
        return JadwalPelajaran::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return JadwalPelajaran::findOrFail($id);
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
            $JadwalPelajaran = JadwalPelajaran::findOrFail($id);
            $JadwalPelajaran->update($request->all());
    
            return $JadwalPelajaran;
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $JadwalPelajaran = JadwalPelajaran::findOrFail($id);
        $JadwalPelajaran->delete();

        return 204;
    }
}
