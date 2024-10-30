<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Distributor;
use App\Http\Requests\StoreDistributorRequest;
use App\Http\Requests\UpdateDistributorRequest;

class DistributorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $data = Distributor::all();
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDistributorRequest $request)
    {
        try {
            $data = Distributor::create($request->all());
            return response()->json(['data' => $data, 'error' => null,], 200);
        } catch (\Exception $e) {
            return response()->json(['data' => null, 'error' => [$e, 'message' => $e->getMessage()]]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Distributor $distributor)
    {
        try {
            if ($distributor) {
                return response()->json(['data' => $distributor, 'error' => null,], 200);
            }

            return response()->json(['data' => null, 'error' => ['message' => 'Data Not Found.']]);
        } catch (\Exception $e) {
            return response()->json(['data' => null, 'error' => [$e, 'message' => $e->getMessage()]]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Distributor $distributor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDistributorRequest $request, Distributor $distributor)
    {
        try {
            $data = $distributor->update($request->all());
            return response()->json(['data' => $data, 'error' => null,], 200);
        } catch (\Exception $e) {
            return response()->json(['data' => null, 'error' => [$e, 'message' => $e->getMessage()]]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Distributor $distributor)
    {
        try {
            $data = $distributor->delete();
            return response()->json(['data' => $data, 'error' => null,], 200);
        } catch (\Exception $e) {
            return response()->json(['data' => null, 'error' => [$e, 'message' => $e->getMessage()]]);
        }
    }
}