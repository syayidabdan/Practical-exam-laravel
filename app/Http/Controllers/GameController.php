<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index(){
        $game = Game::all();
        return view('home',compact('game'));
    }

    public function add(){
        return view('add');
    }

    public function store(Request $request){
        $game = Game::create($request->all());
        return redirect('home');
    }

    public function edit($id){
        $game = Game::find($id);
        return view('update.edit',compact('game'));
    }

    public function update($id, Request $request){
        $game = Game::find($id);
        $game->update($request->all());
        return redirect('home');
    }

    public function destroy($id){
        $game = Game::find($id);
        $game->delete();
        return redirect('home');
    }
}