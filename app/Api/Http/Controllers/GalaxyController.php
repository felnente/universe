<?php

namespace App\Api\Http\Controllers;

use App\Api\Http\Requests\CreateGalaxyRequest;
use App\Models\Galaxy;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class GalaxyController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        return Galaxy::all();
    }

    public function create(CreateGalaxyRequest $request)
    {
        return Galaxy::create($request->post());
    }

    public function show($id)
    {
        $galaxy = Galaxy::with('planets')->find($id);
        return $galaxy;
    }
}
