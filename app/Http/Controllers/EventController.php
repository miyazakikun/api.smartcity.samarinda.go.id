<?php

namespace App\Http\Controllers;
use App\Event;
use App\Http\Resources\EventResource;

class EventController extends Controller
{	

    public function index()
    {
        return new EventResource(Event::get());
    }
}
