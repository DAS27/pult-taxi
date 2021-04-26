<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\TariffStoreRequest;
use App\Http\Resources\TariffResource;
use App\Models\Tariff;

class TariffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        return TariffResource::collection(Tariff::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  TariffStoreRequest $request
     * @return TariffResource
     */
    public function store(TariffStoreRequest $request)
    {
        $validatedData = Tariff::create($request->validated());

        return new TariffResource($validatedData);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tariff $tariff
     * @return TariffResource
     */
    public function show(Tariff $tariff)
    {
        return new TariffResource($tariff);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  TariffStoreRequest $request
     * @param  Tariff             $tariff
     * @return TariffResource
     */
    public function update(TariffStoreRequest $request, Tariff $tariff)
    {
        $tariff->update($request->validated());

        return new TariffResource($tariff);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Tariff                    $tariff
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tariff $tariff)
    {
        $tariff->delete();

        return response(null, 204);
    }
}
