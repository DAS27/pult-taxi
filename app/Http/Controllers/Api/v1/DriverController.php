<?php
namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\DriverStoreRequest;
use App\Http\Resources\DriverResource;
use App\Models\Driver;

class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        return DriverResource::collection(Driver::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\DriverStoreRequest $request
     * @return DriverResource
     */
    public function store(DriverStoreRequest $request)
    {
        $validatedData = Driver::create($request->validated());

        return new DriverResource($validatedData);
    }

    /**
     * Display the specified resource.
     *
     * @param Driver $driver
     * @return DriverResource
     */
    public function show(Driver $driver)
    {
        return new DriverResource($driver);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  DriverStoreRequest $request
     * @param  Driver             $driver
     * @return DriverResource
     */
    public function update(DriverStoreRequest $request, Driver $driver)
    {
        $driver->update($request->validated());

        return new DriverResource($driver);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int                       $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }
}
