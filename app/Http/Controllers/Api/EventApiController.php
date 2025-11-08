<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Http\Resources\EventResource;

class EventApiController extends Controller
{
    public function index()
    {
        return EventResource::collection(Event::all());
    }

    public function show($id)
    {
        return new EventResource(Event::findorFail($id));
    }
}
