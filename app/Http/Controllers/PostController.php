<?php
    
namespace App\Http\Controllers;

use App\Models\Defis;
use App\Models\Games;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{

    public function index ()
    {
        $games = Games::orderBy('titre')->get();
        
        return view('acceuil', [
            'games' => $games
        ]);
    }
    public function defis($id)
    {
        $defis = Games::findorfail($id);

        return view('jeux',[
        'defis' => $defis
        ]);
    }
    public function categorie()
    {
        $games = Games::orderBy('categorie')->get();
        
        return view('categorie', [
            'games' => $games
        ]);
    }

    public function create(Request $request)
    {
        $defis = new Defis();
        $defis->defi = $request->defi;
        $defis->games_id = $request->games_id;
        $defis->save();
        return redirect('games/'.$request->games_id);
    }

    public function delete()
    {
        $id = \Illuminate\Support\Facades\Request::get('id');
        $idgames = \Illuminate\Support\Facades\Request::get('idgames');
        $data =[
            'id'=> $id
        ];
        DB::delete("DELETE FROM `defis` WHERE id = ?", array_values($data)); 
        return redirect('games/'.$idgames);
    }

    public function modifier($id)
    {
        $data = Defis::find($id);
        return view('edit',['data'=>$data]);
    }

    public function update(Request $req)
    {
        $data=Defis::find($req->id);
        $data->defi = $req->defi;
        $data->save();
        return redirect('');
    }
}