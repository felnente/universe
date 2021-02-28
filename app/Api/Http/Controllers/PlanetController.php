<?php

namespace App\Api\Http\Controllers;

use App\Api\Http\Requests\CreatePlanetRequest;
use App\Models\Planet;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class PlanetController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        return Planet::all();
    }

    public function create(CreatePlanetRequest $request)
    {
        return Planet::create($request->post());
    }

    public function show($id)
    {
        return Planet::find($id);
    }

    public function edit(Request $request)
    {
        $planet = Planet::find($request->id);
        return $planet->update($request->post());
    }




}


