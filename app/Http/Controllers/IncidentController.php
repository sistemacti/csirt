<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IncidentReport;
use Illuminate\Support\Facades\Log;

class IncidentController extends Controller
{
    public function index()
    {
        $incidents=IncidentReport::all();
        return view('incidents.index',compact('incidents'));
    }

    public function getIncident($id){
        $incident = IncidentReport::with('entityType')->with('affectedInfrastructure')->with('affectedService')->findOrFail($id);
        Log::info($incident);
        return response()->json([
            'incident'=>$incident
        ]);
    }
}
