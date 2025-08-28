<?php

namespace App\Http\Controllers;

use App\Models\Birim;
use Illuminate\Http\Request;

class BirimController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Birim::latest()->paginate(15));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'birim_adi' => ['required','string','max:255'],
            'konumu' => ['nullable','string','max:255'],
        ]);

        $birim = Birim::create($validated);

        return response()->json($birim, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Birim $birim)
    {
        return response()->json($birim);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Birim $birim)
    {
        $validated = $request->validate([
            'birim_adi' => ['sometimes','required','string','max:255'],
            'konumu' => ['nullable','string','max:255'],
        ]);

        $birim->update($validated);

        return response()->json($birim);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Birim $birim)
    {
        $birim->delete();

        return response()->json(null, 204);
    }
}
