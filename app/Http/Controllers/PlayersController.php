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

    public function savePlayers(Request $request){ 
        $players = new Players;
        $players->name = $request->name;     
        $players->lastname = $request->lastname;     
        $players->age = $request->age;     
        $players->team_id = $request->team_id;     
        $players->save(); 
         
        return redirect('/viewPlayers/'.$request->team_id);
    }

    public function deletePlayer($id){
        $players = Players::find($id); 
        $players->active = 0;
        $players->save();

        return redirect('/viewPlayers/'.$players->team_id);
    }

    public function editPlayer($id){ 
        $player = Players::find($id);
        $teams = Teams::where('active', 1)->get();
        return view('editPlayer', ['player' => $player, 'teams' => $teams]);
    }

    public function updatePlayer(Request $request, $id){
        $players = Players::find($id);
        $players->name = $request->name;     
        $players->lastname = $request->lastname;     
        $players->age = $request->age;     
        $players->team_id = $request->team_id;     
        $players->save(); 
         
        return redirect("/viewPlayers/".$request->team_id);
    }

    public function addPlayer(){
        $teams = Teams::where('active', 1)->get();
        return view('addPlayer', ['teams' => $teams]);
    }


     

}
