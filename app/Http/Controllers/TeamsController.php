<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teams; 

class TeamsController extends Controller
{

    public function viewTeams(){  
        return view('viewTeams', ['teams' => Teams::where('active', 1)->get()]);
    } 

    public function saveTeams(Request $request){ 
        $teams = new Teams;
        $teams->name = $request->name;     
        $file= $request->file('logo');
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extension;
        $file->move('images', $filename);
        $teams->logo = $filename; 

        $teams->save(); 
         
        return redirect('/viewTeams');
    }

    public function deleteTeam($id){
        $teams = Teams::find($id); 
        $teams->active = 0;
        $teams->save();

        return redirect('/viewTeams');
    } 

    public function editTeam($id){ 
        $team = Teams::find($id);
        return view('editTeam', ['team' => $team]);
    }

    public function updateTeam(Request $request, $id){
        $teams = Teams::find($id);
        $teams->name = $request->name;     
        $file= $request->file('logo');
        if($file != null){
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images', $filename);
            $teams->logo = $filename; 
        }else{
            $teams->logo = $teams->logo;
        }

        $teams->save(); 
         
        return redirect('/viewTeams');
    }
}
