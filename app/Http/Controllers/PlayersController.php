<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Players;
use App\Models\Teams;

class PlayersController extends Controller
{
    public function viewPlayers($team_id){   
        $players = Players::where('active', 1)->where('team_id', $team_id)->get();
        $teams = Teams::where('active', 1)->where('id', $team_id)->get();
        // return view('viewPlayers', ['players' => Players::where('active', 1)->where('team_id', $team_id)->get()]);
        return view('viewPlayers', compact('players', 'teams'));
    }  
     

}
