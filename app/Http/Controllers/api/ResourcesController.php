<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ApiResource;
use App\Models\Resource;
use Illuminate\Http\Request;

class ResourcesController extends Controller
{
    //

    public function index(){
        return ApiResource::collection(Resource::limit(5)->get());
    }
}
