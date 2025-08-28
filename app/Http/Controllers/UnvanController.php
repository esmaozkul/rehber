<?php

namespace App\Http\Controllers;

use App\Models\Unvan;
use Illuminate\Http\Request;

class UnvanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Unvan::latest()->paginate(15));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'unvan_adi' => ['required','string','max:255'],
        ]);

        $unvan = Unvan::create($validated);

        return response()->json($unvan, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Unvan $unvan)
    {
        return response()->json($unvan);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Unvan $unvan)
    {
        $validated = $request->validate([
            'unvan_adi' => ['sometimes','required','string','max:255'],
        ]);

        $unvan->update($validated);

        return response()->json($unvan);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Unvan $unvan)
    {
        $unvan->delete();

        return response()->json(null, 204);
    }
}
