<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Catalog;
use App\Http\Requests\StoreCatalogRequest;
use App\Http\Requests\UpdateCatalogRequest;

class CatalogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $data = Catalog::all();
            return response()->json(['data' => $data, 'error' => null], 200);
        } catch (\Exception $e) {
            return response()->json(['data' => null, 'error' => [$e, 'message' => $e->getMessage()]]);
        }
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
    public function store(StoreCatalogRequest $request)
    {
        try {
            $data = Catalog::create($request->all());
            return response()->json(['data' => $data, 'error' => null,], 200);
        } catch (\Exception $e) {
            return response()->json(['data' => null, 'error' => [$e, 'message' => $e->getMessage()]]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Catalog $catalog)
    {
        try {
            if ($catalog) {
                return response()->json(['data' => $catalog, 'error' => null,], 200);
            }

            return response()->json(['data' => null, 'error' => ['message' => 'Data Not Found.']]);
        } catch (\Exception $e) {
            return response()->json(['data' => null, 'error' => [$e, 'message' => $e->getMessage()]]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Catalog $catalog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCatalogRequest $request, Catalog $catalog)
    {
        try {
            $data = $catalog->update($request->all());
            return response()->json(['data' => $data, 'error' => null,], 200);
        } catch (\Exception $e) {
            return response()->json(['data' => null, 'error' => [$e, 'message' => $e->getMessage()]]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Catalog $catalog)
    {
        try {
            $data = $catalog->delete();
            return response()->json(['data' => $data, 'error' => null,], 200);
        } catch (\Exception $e) {
            return response()->json(['data' => null, 'error' => [$e, 'message' => $e->getMessage()]]);
        }
    }
}
