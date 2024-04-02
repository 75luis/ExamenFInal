<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\ActividadAnimalController as ActividadAnimalControllerRequest;

class ActividadAnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     * @author PlantUmlGen
     * @param ActividadAnimalControllerRequest\ActividadAnimalControllerIndexRequest $request
     * @return JsonResponse
     */
    public function index(ActividadAnimalControllerRequest\ActividadAnimalControllerIndexRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Update the specified resource in storage.
     * @author PlantUmlGen
     * @param ActividadAnimalControllerRequest\ActividadAnimalControllerUpdateRequest $request
     * @return JsonResponse
     */
    public function update(ActividadAnimalControllerRequest\ActividadAnimalControllerUpdateRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Display the specified resource.
     * @author PlantUmlGen
     * @param ActividadAnimalControllerRequest\ActividadAnimalControllerShowRequest $request
     * @return JsonResponse
     */
    public function show(ActividadAnimalControllerRequest\ActividadAnimalControllerShowRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Remove the specified resource from storage.
     * @author PlantUmlGen
     * @param ActividadAnimalControllerRequest\ActividadAnimalControllerDestroyRequest $request
     * @return JsonResponse
     */
    public function destroy(ActividadAnimalControllerRequest\ActividadAnimalControllerDestroyRequest $request): JsonResponse
    {
        return $request->response();
    }

    /**
     * Store a newly created resource in storage.
     * @author PlantUmlGen
     * @param ActividadAnimalControllerRequest\ActividadAnimalControllerStoreRequest $request
     * @return JsonResponse
     */
    public function store(ActividadAnimalControllerRequest\ActividadAnimalControllerStoreRequest $request): JsonResponse
    {
        return $request->response();
    }
}
