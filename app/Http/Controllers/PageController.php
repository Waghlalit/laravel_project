<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Team;
use App\Models\Client;

class PageController extends Controller
{
    public function home()
    {
        $services = Service::limit(6)->get();
        return view('pages.home', compact('services'));
    }

    public function about()
    {
        return view('pages.about');
    }

    public function services()
    {
        $services = Service::all();
        return view('pages.services', compact('services'));
    }

    public function team()
    {
        $team = Team::all();
        return view('pages.team', compact('team'));
    }

    public function clients()
    {
        $clients = Client::all();
        return view('pages.clients', compact('clients'));
    }

    public function why()
    {
        return view('pages.why');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    // Simple API endpoints (JSON) for dynamic front-end usage
    public function apiServices(){ return response()->json(Service::all()); }
    public function apiTeam(){ return response()->json(Team::all()); }
    public function apiClients(){ return response()->json(Client::all()); }
}
