<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teams;

class TeamsController extends Controller
{

    public function viewTeams(){  
        return view('viewTeams', ['teams' => Teams::where('active', 1)->get()]);
    }

    // public function viewSpecificTeam($team_id){
    //     return view('viewPlayers', ['teams' => Teams::where('active', 1)->where('id', $team_id)->get()]);
    // }

    public function saveTeams(Request $request){ 
        $teams = new Teams;
        $teams->name = $request->name;
        $teams->logo = $request->logo;
        $teams->save(); 
        return view('saveTeams', compact('teams'));
    }
}
