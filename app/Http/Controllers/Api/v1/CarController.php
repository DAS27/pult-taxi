<?php
namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\CarStoreRequest;
use App\Http\Resources\CarResource;
use Illuminate\Http\Request;
use App\Models\Car;
use Illuminate\Http\Resources\Json\JsonResource;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        return CarResource::collection(Car::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CarStoreRequest $request
     * @return CarResource
     */
    public function store(CarStoreRequest $request)
    {
        $validatedData = Car::create($request->validated());

        return new CarResource($validatedData);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return CarResource
     */
    public function show(Car $car)
    {
        return new CarResource($car);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\CarStoreRequest $request
     * @param \App\Models\Car $car
     * @return CarResource
     */
    public function update(CarStoreRequest $request, Car $car)
    {
        $car->update($request->validated());

        return new CarResource($car);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        $car->delete();

        return response(null, 204);
    }
}
