<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Type;
use App\Models\Technology;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::with('type', 'technologies')->paginate(2);
        return response()->json([
            'success' => true,
            'results' => $projects
        ]);
    }

    public function show($titolo){
        $project = Project::with('type', 'technologies')->where('titolo', $titolo)->first();
        if ($project) {
            return response()->json([
                'success' => true,
                'project' => $project
            ]);
        }

        return response()->json([
            'success' => false,
            'error'   => 'Nessun progetto trovato'
        ]);
    }
}
